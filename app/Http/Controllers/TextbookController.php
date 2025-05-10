<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TextbookController extends Controller
{

    /* handouts should not be available to unauthourised */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('/text-books/index');
    }

    public function show($book, $chapter)
    {
        $file = resource_path() . '/text-books/' . $book . '/' . $chapter . '.pdf';
        return response()->file($file, ['Content-Type' => 'application/pdf']);
    }
}
