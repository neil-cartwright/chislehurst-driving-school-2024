<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordController extends Controller
{

    public function index($record)
    {
        $record = resource_path() . '/records/' . $record . '.pdf';

        return response()->file($record, ['Content-Type' => 'application/pdf']);
    }
}
