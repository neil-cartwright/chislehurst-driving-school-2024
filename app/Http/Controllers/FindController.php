<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Lesson;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class FindController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/find/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Return lessons according to ajax request
     */
    public function find(Request $request)
    {
        $from = $request->input('dateFrom');
        $to = $request->input('dateTo');

        $lessons = DB::table('lessons')
            ->whereBetween('lesson_date', [$from, $to])
            ->join('customers', 'lessons.customer_id', '=', 'customers.id')
            ->select(
                'lessons.*',
                'lessons.id AS less_id',
                DB::raw('DATE_FORMAT(lessons.lesson_date, "%b-%d-%Y") as formatted_date'),
                'customers.name AS cust_name'
            )
            ->orderBy('lessons.lesson_date', 'DESC')
            ->get();

        $count = $lessons->count();
        $total_charges = $lessons->sum('lesson_charge');
        $total_payments = $lessons->sum('amountPaymentTaken');
        $total_discounts = $lessons->sum('discountGiven');
        $total_cancelled = $lessons->sum('lesson_cancelled');
        $total_duration = toHoursMins($lessons->sum('lesson_duration'));
        $distinct_customers = DB::table('lessons')
            ->whereBetween('lesson_date', [$from, $to])->distinct()->count('lessons.customer_id');

        foreach ($lessons as $lesson) {
            $lesson->lesson_duration = toHoursMins($lesson->lesson_duration);
            $lesson->lesson_charge = $lesson->lesson_charge - $lesson->discountGiven;
        }

        return response()->json([
            'lessons' => $lessons,
            'count' => $count,
            'total_charges' => $total_charges - $total_discounts,
            'total_payments' => $total_payments,
            'total_discounts' => $total_discounts,
            'total_cancelled' => $total_cancelled,
            'total_duration' => $total_duration,
            'distinct_customers' => $distinct_customers,
        ]);
    }


    public function monthYear($month, $year)
    {
        $lessons = DB::table('lessons')
            ->whereMonth('lesson_date', $month)
            ->whereYear('lesson_date', $year)
            ->join('customers', 'lessons.customer_id', '=', 'customers.id')
            ->select(
                'lessons.*',
                'lessons.id AS less_id',
                DB::raw('DATE_FORMAT(lessons.lesson_date, "%b-%d-%Y") as formatted_date'),
                'customers.name AS cust_name'
            )
            ->orderBy('lessons.lesson_date', 'ASC')
            ->get();

        foreach ($lessons as $lesson) {
            $lesson->lesson_charge = $lesson->lesson_charge - $lesson->discountGiven;
        }


        $count = $lessons->count();
        $total_charges = $lessons->sum('lesson_charge');
        // $total_payments = $lessons->sum('amountPaymentTaken');
        // $total_discounts = $lessons->sum('discountGiven');
        // $total_cancelled = $lessons->sum('lesson_cancelled');
        // $total_duration = toHoursMins($lessons->sum('lesson_duration'));

        $distinct_customers = DB::table('lessons')
            ->whereMonth('lesson_date', $month)->whereYear('lesson_date', $year)->distinct()->count('lessons.customer_id');

        foreach ($lessons as $lesson) {
            $lesson->lesson_duration = toHoursMins($lesson->lesson_duration);
        }

        $results = [
            'month' => $month,
            'year' => $year,
            'lessons' => $lessons,
            'count' => $count,
            'total_charges' => $total_charges,
            // 'total_payments' => $total_payments,
            // 'total_discounts' => $total_discounts,
            // 'total_cancelled' => $total_cancelled,
            // 'total_duration' => $total_duration,
            'distinct_customers' => $distinct_customers
        ];

        return view('admin.lessons.show')->with('results', $results);
    }
}
