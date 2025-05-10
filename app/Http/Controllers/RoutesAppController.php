<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesAppController extends Controller
{
    public function index($area)
    {
        return view('routes-app.index')->with('area', $area);
    }
}
