<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Lesson;

class CostController extends Controller
{

    /** alternative functions for costs *non-resource* */

    public $categories = [
        'fuel',
        'vehicle',
        'computer',
        'advertising',
        'subscriptions',
        'stationery',
        'tel_and_int',
        'finance',
        'utilities',
        'accounts',
        'other'
    ];

    public $months = [
        'January' => 1,
        'February' => 2,
        'March' => 3,
        'April' => 4,
        'May' => 5,
        'June' => 6,
        'July' => 7,
        'August' => 8,
        'September' => 9,
        'October' => 10,
        'November' => 11,
        'December' => 12
    ];

    /**
     * Get costs by category
     */
    public function category(Cost $cost, $category)
    {
        $costs = Cost::where('category', $category)->simplePaginate(30);
        $months = $this->months;

        return view('admin/costs/index', compact('costs', 'category', 'months'));
    }


    /**
     * Get costs by description
     */
    public function description(Cost $cost, $description)
    {
        $costs = Cost::query()->where('description', 'LIKE', '%' . $description . '%')->simplePaginate(12);
        $months = $this->months;

        return view('admin/costs/index', compact('costs', 'description', 'months'));
    }


    /* get costs by month and sort into categories */
    public function month($month, $year)
    {

        $month_name = date("F", mktime(0, 0, 0, $month, 10));

        $costs = DB::table('costs')->whereMonth('date_of_purchase', $month)->whereYear('date_of_purchase', $year)->orderBy('date_of_purchase', 'asc')->get();

        $categories = $this->categories;
        sort($categories);

        // groups all costs by category for totals
        $total_category_costs = $costs->groupBy('category')->map(function ($cost) {
            return $cost->sum('amount');
        });

        $months = $this->months;

        return view('admin/costs/show', compact('costs', 'categories', 'total_category_costs', 'month_name', 'year', 'months'));
    }


    /* query for all costs for this month */
    public function get_costs()
    {
        return DB::table('costs')->whereYear('date_of_purchase', Carbon::now()->year)->whereMonth('date_of_purchase', Carbon::now()->month)->orderBy('date_of_purchase', 'desc')->simplePaginate(20);
    }


    /* show form to search for costs */
    public function search(Cost $cost)
    {
        $months = $this->months;
        $categories = $this->categories;

        return view('admin.costs.find')->with(['months' => $months, 'categories' => $categories]);
    }


    /* retrieve results via axios */
    public function find(Request $request)
    {
        $month = $request->input('month');
        $category = $request->input('category');
        $year = $request->input('year');
        $allFrom = $request->input('allFrom');
        $description = $request->input('description');

        /* convert string 'true' to boolean */
        $allFromTaxYear = $allFrom === 'taxYear';
        $from = date($year . '-04-05');
        $to = Carbon::create($from)->addYear()->format('Y-m-d');

        $allFromMonth = $allFrom === 'month';

        $allFromCategory = $allFrom === 'category';

        $allFromDescription = $allFrom === 'description';

        if ($allFromDescription) {
            $costs = DB::table('costs')
                ->where('description', 'LIKE', '%' . $description . '%')
                ->orderBy('date_of_purchase', 'desc')->get();
            $message = 'Everything matching description ' . $description;
        } else if ($allFromTaxYear) {
            $costs = DB::table('costs')
                ->whereBetween('date_of_purchase', [$from, $to])
                ->where('category', $category)
                ->orderBy('date_of_purchase', 'desc')->get();
            $message = 'Everything from the tax year starting ' . $year;
        } else if ($allFromMonth) {
            $costs = DB::table('costs')
                ->whereMonth('date_of_purchase', $month)
                ->whereYear('date_of_purchase', $year)
                ->orderBy('date_of_purchase', 'desc')->get();
            $message = 'Everything from ' . $this->getMonthName($month) . ' ' . $year;
        } else {
            $costs =  DB::table('costs')
                ->whereYear('date_of_purchase', $year)
                ->whereMonth('date_of_purchase', $month)
                ->where('category', $category)
                ->orderBy('date_of_purchase', 'desc')->get();
            $message = 'Everything in ' . $category . ' category from ' . $this->getMonthName($month) . ' ' . $year;
        }

        $total_costs = $costs->sum('amount');

        return response()->json(['costs' => $costs, 'total_costs' => $total_costs, 'message' => $message]);
    }

    /* averages */
    public function averages($year = '2024')
    {
        $from = date($year . '-04-01');
        $to = Carbon::create($from)->addYear()->format('Y-m-d');

        $lessons = Lesson::whereBetween('lesson_date', [$from, $to])->orderBy('created_at', 'asc')
            ->get()
            ->groupBy(function ($val) {
                return Carbon::parse($val->created_at)->format('M');
            });

        $costs = Cost::whereBetween('date_of_purchase', [$from, $to])->orderBy('date_of_purchase', 'asc')
            ->get()
            ->groupBy(function ($val) {
                return Carbon::parse($val->date_of_purchase)->format('M');
            });

        /* utilities charged at 0.15% */
        foreach ($costs as $cost) {
            foreach ($cost as $cos) {
                if ($cos->category == 'utilities') {
                    $cos->amount = $cos->amount * 0.15;
                }
            }
        }

        return view('admin.costs.averages')->with(['the_year' => $year, 'lessons' => $lessons, 'costs' => $costs]);
    }

    public function getMonthName($m)
    {
        return array_search($m, $this->months);
    }
}
