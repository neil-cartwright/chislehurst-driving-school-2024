<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactEmail;

use Exception;


class ContactController extends Controller
{

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'telephone' => ['required']
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $telephone = $request->input('telephone');
        $address = $request->input('address');
        $enquiry = $request->input('enquiry');

        try {
            Mail::to('neil@chislehurstdrivingschool.co.uk')->send(new ContactEmail($name, $email, $telephone, $address, $enquiry));
            return redirect()->back()->with('message', 'Thanks. Your email has been sent. I usually reply within 24 hours.');
        } catch (Exception $error) {
            return redirect()->back()->with('message', 'There was an error. Please call, text or email directly.');
        }
    }
}
