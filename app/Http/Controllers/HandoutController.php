<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HandoutController extends Controller
{
    /* handouts should not be available to unauthourised */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('handouts/index');
    }

    public function show($file_name)
    {
        if (Auth::check()) {
            $file = resource_path() . '/driver-active/' . $file_name . '.pdf';
            return response()->file($file, ['Content-Type' => 'application/pdf']);
        } else {
            return redirect()->route('login');
        }
    }

    public function show_all()
    {
        if (Auth::check()) {
            $handouts = scandir(resource_path() . '/driver-active/');
        }
        return $handouts;
    }
}
