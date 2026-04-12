<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;

use Illuminate\Http\Request;


class EnquiryController extends Controller
{

    /**
     * display the admin home view with all lessons
     */
    public function index()
    {

        $enquiries = Enquiry::orderBy('date', 'desc')->simplePaginate(10);

        return view('admin.enquiries.index', compact(['enquiries']));
    }


    public function create()
    {
        return view('admin.enquiries.create');
    }


    public function store(Request $request)
    {
        $enquiry = new Enquiry;

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $enquiry->date = $request->input('date');
        $enquiry->name = $request->input('name');
        $enquiry->email = $request->input('email');
        $enquiry->tel = $request->input('tel');
        $enquiry->address = $request->input('address');
        $enquiry->message = $request->input('message');
        $enquiry->type = $request->input('type');
        $enquiry->outcome = $request->input('outcome');

        if ($enquiry->save()) {

            $enquiries = Enquiry::all();

            session()->flash('message', 'enquiry info saved');

            return redirect()->route('admin.enquiries', compact('enquiries'));
        }
    }

    public function edit($id)
    {
        $enquiry = Enquiry::find($id);

        return view('admin.enquiries.edit', compact('enquiry'));
    }

    public function update(Request $request, $id)
    {
        $enquiry = Enquiry::find($id);

        $enquiry->date = $request->input('date');
        $enquiry->name = $request->input('name');
        $enquiry->email = $request->input('email');
        $enquiry->tel = $request->input('tel');
        $enquiry->address = $request->input('address');
        $enquiry->message = $request->input('message');
        $enquiry->type = $request->input('type');
        $enquiry->outcome = $request->input('outcome');

        if ($enquiry->save()) {
            $enquiries = Enquiry::all();

            return redirect()->route('admin.enquiries', compact('enquiries'));
        } else {
            $message = 'there was an error';

            return redirect()->back()->with('message', $message);
        }
    }

    public function destroy($id)
    {
        $enquiry = Enquiry::find($id);
        $message = 'The record was deleted';
        $enquiry->delete();

        return redirect()->back()->with('message', $message);
    }
}
