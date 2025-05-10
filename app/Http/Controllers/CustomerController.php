<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Models\Customer;
use Carbon\Carbon;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(?string $sort = null)
    {
        /* booleanise string */
        $sort = $sort == 'sort';

        $lessons = DB::table('lessons')
            ->join('customers', 'customers.id', 'lessons.customer_id')
            ->where('has_passed_test', '==', 0)
            ->where('archived', '==', 0)
            ->select('amountPaymentTaken', 'discountGiven', 'lesson_charge')
            ->get();

        if ($sort) {
            $customers = Customer::where('has_passed_test', '==',  0)
                ->where('archived', '==', 0)
                ->orderBy('name')
                ->get();
        } else {
            $customers = Customer::where('has_passed_test', '==',  0)
                ->where('archived', '==', 0)
                ->latest()
                ->get();
        }

        return view('admin.customers.index', compact(['customers', 'lessons']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $customer = new Customer;
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');

        try {
            $customer->save();
            return redirect()->back()->with('message', 'customer has been saved');
        } catch (QueryException $e) {

            $errorCode = $e->errorInfo[1];
            if ($errorCode == '1062') {
                return redirect()->back()->with('message', 'Customer already exists');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $result = Customer::where('id', $id)->get();

        $customer = $result->first();

        if ($customer->test_details) {
            $test_details = explode(',', $customer->test_details);
            $customer->test_date_readable = Carbon::parse($test_details[0])->format('D jS M Y');
            $customer->test_date = Carbon::parse($test_details[0])->format('Y-m-d');
            $customer->test_center = $test_details[1];
            $customer->test_time = $test_details[2];
        }

        return view('admin.customers.show')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified resource.j
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
     * Remove the specified customer from the database.
     */
    public function destroy(string $id)
    {
        $customer = Customer::find($id);

        $message = $customer->name . ' was deleted from the database';

        $customer->delete();

        return redirect()->back()->with('message', $message);
    }

    /**
     * Show the form for searching for an individual customer
     */
    public function search()
    {
        return view('admin/customers/search');
    }

    /** handle the search form axios request */
    public function find(Request $request)
    {
        $name = $request->input('name');

        if ($name == 'all_customers') {
            $customers = Customer::where('archived', false)
                ->where('has_passed_test', false)
                ->orderBy('created_at', 'desc')
                ->get();
        } else {
            $customers = Customer::where('name', 'like', '%' . $name . '%')->get();
        }

        return response($customers);
    }
}
