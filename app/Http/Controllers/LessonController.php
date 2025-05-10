<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Lesson;
use App\Models\Customer;


class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons = Lesson::orderBy('lesson_date', 'desc')->simplePaginate(20);

        return view('admin.lessons.index', compact(['lessons']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::where('has_passed_test', '=', 0)->where('archived', '=', 0)->orderBy('name')->get();

        return view('admin.lessons.create')->with('customers', $customers);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required',
            'lesson_date' => 'required'
        ]);

        $lesson = new Lesson;
        $lesson->customer_id = $request->input('customer_id');
        $lesson->lesson_date = $request->input('lesson_date');
        $lesson->lesson_duration = $request->input('lesson_duration');
        $lesson->lesson_charge = $request->input('lesson_charge');
        $lesson->lesson_rate = $request->input('lesson_rate');
        $lesson->paymentTaken = $request->input('paymentTaken');
        $lesson->amountPaymentTaken = $request->input('amountPaymentTaken');
        $lesson->discountGiven = $request->input('discountGiven');
        $lesson->lesson_cancelled = $request->input('lesson_cancelled');
        $lesson->paid_cash = $request->input('paid_cash');

        if ($lesson->save()) {
            return response('saved');
        } else {
            return response('not saved');
        }
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
        $customers = Customer::where('has_passed_test', '=', 0)->where('archived', '=', 0)->orderBy('name')->get();

        $lesson = Lesson::find($id);

        /* forces relation to be added to lesson object!?! */
        $customer = $lesson->customer;

        return view('admin.lessons.edit', compact('lesson', 'customers'));
    }

    /**
     * Show view to update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lesson = Lesson::find($id);
        $lesson->customer_id = $request->input('customer_id');
        $lesson->lesson_date = $request->input('lesson_date');
        $lesson->lesson_duration = $request->input('lesson_duration');
        $lesson->lesson_charge = $request->input('lesson_charge');
        $lesson->amountPaymentTaken = $request->input('amountPaymentTaken');
        $lesson->paymentTaken = $request->input('paymentTaken');
        $lesson->discountGiven = $request->input('discountGiven');
        $lesson->lesson_cancelled = $request->input('lesson_cancelled');
        $lesson->paid_cash = $request->input('paid_cash');

        if ($lesson->save()) {
            return response('message');
        } else {
            return response('there was an error');
        }
    }

    /**
     * Remove the specified lesson from the database.
     */
    public function destroy(string $id)
    {
        $lesson = Lesson::find($id);

        $message = $lesson->customer->name . '\'s lesson was deleted from the database';

        $lesson->delete();

        return redirect()->back()->with('message', $message);
    }

    /**
     * Store the lesson notes
     */
    public function notes(string $id, Request $request)
    {
        $lesson = Lesson::find($id);

        $new_notes = $request->input('lesson_notes');

        $lesson->lesson_notes = $new_notes;

        if ($lesson->save()) {
            return response($new_notes);
        }
    }
}
