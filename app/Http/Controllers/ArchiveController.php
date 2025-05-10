<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Customer;

class ArchiveController extends Controller
{
    /* archive or set passed_test */
    public function update(Request $request, string $id)
    {
        $customer = Customer::find($id);

        $customer->has_passed_test = $request->input('has_passed_test');
        $customer->archived = $request->input('archived');

        $customer->save();

        return response('saved');
    }

    public function archive()
    {

        $customers = Customer::where('archived', '=', 1)->get();

        return view('admin/customers/archive')->with(['customers' => $customers]);
    }

    public function test_passes()
    {
        $customers = Customer::where('has_passed_test', '=', 1)->get();

        return view('admin/customers/archive')->with(['customers' => $customers]);
    }
}
