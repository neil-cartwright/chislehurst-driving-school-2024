<?php

namespace App\Http\Controllers;

use App\Models\Cost;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\CostController;

class CostResourceController extends Controller
{

    /** resource functions for costs */

    public $categories;
    public $months;
    public $CostController;

    public function __construct()
    {
        $this->CostController = new CostController();
        $this->categories = $this->CostController->categories;
        $this->months = $this->CostController->months;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costs = $this->CostController->get_costs();

        $months = $this->months;

        return view('admin/costs/index', compact('costs', 'months'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($the_category = '', $month = '', $year = '')
    {
        if ($month != '') {
            $date = Carbon::parse('01-' . $month . '-' . $year)->format('Y-m-d');
        } else {
            $date = null;
        }

        return view('admin/costs/create')->with(['categories' => $this->categories, 'the_category' => $the_category, 'date' => $date]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $month = $request->input('month');
        $year = $request->input('year');

        $costs = Cost::all();
        $cost = new Cost;
        $cost->date_of_purchase = $request->input('date');
        $cost->category = $request->input('category');
        $cost->description = $request->input('description');
        $cost->amount = $request->input('amount');
        $cost->monthly_recurring = $request->input('monthly_recurring');

        // recurring feature
        if ($cost->monthly_recurring == null) {
            $cost->monthly_recurring = 0;
        } else {
            $cost->monthly_recurring = 1;
            $this->recur_cost($cost, $request);
        }

        if ($cost->save()) {
            return redirect('/admin/costs/show/' . $month . '/' . $year)->with(['message' => 'Item has been updated', 'costs' => $costs]);
        } else {
            return redirect()->back()->with('msg', 'Something went wrong');
        }
    }


    /* saves cost to database for all remaining months of year */

    public function recur_cost($cost, $request)
    {
        $cost->monthly_recurring = 1;
        $given_year = Carbon::parse($cost->date_of_purchase)->year;
        $given_month = Carbon::parse($cost->date_of_purchase)->month;
        $given_day = Carbon::parse($cost->date_of_purchase)->day;

        // loop over the months which are ahead of given month in current year
        $months_to_recur = array_filter($this->months, function ($month) use ($given_month) {
            return $given_month < $month;
        });

        // for each of the months save the formatted date
        foreach ($months_to_recur as $month) {
            // str_pad adds leading zero to date/month
            $formatted_date = $given_year . '-' . str_pad($month, 2, '0', STR_PAD_LEFT) . '-' . str_pad($given_day, 2, '0', STR_PAD_LEFT);
            $cost = new Cost;
            $cost->date_of_purchase = $formatted_date;
            $cost->category = $request->input('category');
            $cost->description = $request->input('description');
            $cost->amount = $request->input('amount');
            $cost->monthly_recurring = $request->input('monthly_recurring');
            $cost->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function show(Cost $cost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function edit(Cost $cost, $id)
    {
        $categories = $this->categories;
        $cost = Cost::find($id);

        return view('admin.costs.edit', compact('cost', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cost $cost, $id)
    {
        $costs = Cost::all();

        $cost = Cost::find($id);

        $year = Carbon::parse($cost->date_of_purchase)->year;
        $month = Carbon::parse($cost->date_of_purchase)->month;

        $cost->date_of_purchase = $request->input('date');
        $cost->category = $request->input('category');
        $cost->description = $request->input('description');
        $cost->amount = $request->input('amount');
        $cost->monthly_recurring = $request->input('monthly_recurring');

        if ($cost->monthly_recurring == null) {
            $cost->monthly_recurring = 0;
        } else {
            $cost->monthly_recurring = 1;
            $this->recur_cost($cost, $request);
        }

        if ($cost->save()) {
            return redirect('/admin/costs/show/' . $month . '/' . $year)->with(['message' => 'Item has been updated', 'costs' => $costs, 'categories' => $this->categories]);
        } else {
            return redirect()->back()->with('message', 'Something went wrong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cost  $cost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cost $cost, $id)
    {
        $cost = Cost::find($id);

        $year = Carbon::parse($cost->date_of_purchase)->year;
        $month = Carbon::parse($cost->date_of_purchase)->month;
        $cost->delete();

        return redirect('/admin/costs/show/' . $month . '/' . $year)->with(['message' => 'Cost was deleted', 'costs' => $this->CostController->get_costs(), 'months' => $this->months]);
    }
}
