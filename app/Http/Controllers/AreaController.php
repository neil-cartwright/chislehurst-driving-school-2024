<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function show($area)
    {
        /* to capitalize postcode for output */
        $area = explode('-', $area);
        $postcode = array_pop($area);
        $placename = implode('-', $area);

        $placename = explode('-', $placename);
        $placename = implode(' ', $placename);

        $area = $placename . ' ' . strtoupper($postcode);

        $areas = array(
            'bromley BR1',
            'bickley BR1',
            'petts wood BR5',
            'chislehurst BR7',
            'kidbrooke SE3',
            'eltham SE9',
            'mottingham SE9',
            'new eltham SE9',
            'grove park SE12',
            'lee SE12',
            'sidcup DA15'
        );

        if (in_array($area, $areas)) {
            return view('areas.index')->with(['title' => $area, 'placename' => $placename, 'postcode' => $postcode]);
        } else {
            return redirect()->route('index');
        }
    }
}
