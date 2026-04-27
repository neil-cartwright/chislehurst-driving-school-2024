<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function show($area)
    {
        /* to capitalize postcode for output */
        // $area = explode('-', $area);
        // $postcode = array_pop($area);
        // $placename = implode('-', $area);

        // $placename = explode('-', $placename);
        // $placename = implode(' ', $placename);

        // $area = $placename . ' ' . strtoupper($postcode);

        $areas = array(
            'bromley',
            'bickley',
            'petts-wood',
            'chislehurst',
            'kidbrooke',
            'eltham',
            'mottingham',
            'new-eltham',
            'grove-park',
            'lee',
            'sidcup',
            'downham'
        );

        if (in_array($area, $areas)) {
            return view('areas.index')->with(['area' => $area]);
        } else {
            return redirect()->route('index');
        }
    }
}
