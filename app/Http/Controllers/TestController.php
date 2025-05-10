<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Lesson;


class TestController extends Controller
{
    public function store(Request $request)
    {
        $id = $request->input('customer_id');

        if ($request->input('test_center')) {
            $date = $request->input('date');
            $test_center = $request->input('test_center');
            $test_time = $request->input('test_time');

            $details = implode(',', array($date, $test_center, $test_time));

            if (Customer::where('id', $id)->update(array('test_details' => $details))) {
                return response('Test Appointment Recorded');
            };
        } else {
            if (Customer::where('id', $id)->update(array('test_details' => NULL))) {
                return response('Test Cancelled');
            };
        }
    }

    public function index(Customer $customer)
    {

        $customers_with_tests =
            $customer->where('test_details', '!=', null)
            ->where('has_passed_test', '==', 0)
            ->get();

        foreach ($customers_with_tests as $customer) {
            $test_details = explode(',', $customer->test_details);
            $customer->test_date = $test_details[0];
            $customer->test_center = $test_details[1];
            $customer->test_time = $test_details[2];
        }

        $customers = $customers_with_tests->sortBy('test_date');

        return view('admin.customers.tests')->with('customers', $customers);
    }
}
