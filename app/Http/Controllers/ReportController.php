<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Lesson;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $lesson = Lesson::find($id);

        return view('admin.reports.create')->with('lesson', $lesson);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer_id = $request->input('customer_id');

        $report = new Report;

        $report->lesson_id = $request->input('lesson_id');
        $report->areas = $request->input('areas');
        $report->conditions = $request->input('conditions');
        $report->what_happened = $request->input('what_happened');
        $report->whats_next = $request->input('whats_next');

        if ($report->save()) {
            return redirect()->route('admin.customers.show', [$customer_id])->with('message', 'report saved');
        } else {
            return 'there was an error';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report, $id)
    {
        $report = Report::find($id);
        return view('admin.reports.show')->with('report', $report);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report, $id)
    {
        $customer_id = $request->input('customer_id');

        $report = Report::find($id);

        $report->lesson_id = $request->input('lesson_id');
        $report->areas = $request->input('areas');
        $report->conditions = $request->input('conditions');
        $report->what_happened = $request->input('what_happened');
        $report->whats_next = $request->input('whats_next');

        if ($report->save()) {
            return redirect()->route('admin.customers.show', [$customer_id])->with('message', 'report updated');
        } else {
            return 'there was an error';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
