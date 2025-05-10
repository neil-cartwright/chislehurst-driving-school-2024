<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Lesson;
use App\Models\Customer;
use Carbon\Carbon;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('/dashboard');
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
    public function show(string $id)
    {
        //
    }

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
     * Show the lessons for logged in user
     */
    public function lessons()
    {

        $customer = Customer::where('email', Auth::user()->email)->get();

        $customer_id = $customer->first()->id;

        $lessons = Lesson::where('customer_id', $customer_id)->orderBy('lesson_date', 'desc')->get();

        foreach ($lessons as $lesson) {
            if ($lesson->lesson_duration == '1.66667') {
                $lesson->lesson_duration = '1 hour 40 mins';
            } elseif ($lesson->lesson_duration == '0.833335') {
                $lesson->lesson_duration = '50 mins';
            }
        }

        if ($customer->first()->test_details) {
            $test_details = explode(',', $customer->first()->test_details);
            $customer->first()->test_date_readable = Carbon::parse($test_details[0])->format('D jS M Y');
            $customer->first()->test_date = Carbon::parse($test_details[0])->format('Y-m-d');
            $customer->first()->test_center = $test_details[1];
            $customer->first()->test_time = $test_details[2];
        }

        return view('user.index', compact(['lessons', 'customer']));
    }
}
