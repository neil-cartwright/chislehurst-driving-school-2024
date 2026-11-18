<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

use Illuminate\Support\Facades\Storage;


class ProgressReportController extends Controller
{

    public function index()
    {
        return view('user.progress.index');
    }

    public function show($id)
    {
        $customer = Customer::find($id);

        if ($customer->progress) {
            $data = $customer->progress;
        } else {
            $data = Storage::disk('local')->get('progress-report.json');
            $data = json_decode($data, true);
        }

        return view('user.progress.show', compact('customer', 'data'));
    }

    public function store(Request $request, $id)
    {
        $customer = Customer::find($id);

        // $customer->progress = json_encode($request->except('_token', '_method'));

        return response($customer);
    }
}
