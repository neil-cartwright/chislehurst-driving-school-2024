<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('test-routes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $area = 'sidcup')
    {
        return view('test-routes.show')->with('area', $area);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * 
     */
    public function old_routes($route, $id)
    {
        $url = resource_path() . '/test-routes/' . $route . '/' . $route . '_' . $id . '.pdf';
        return response()->file($url, ['Content-Type' => 'application/pdf']);
    }

    public function video($video)
    {
        return view('test-routes.video.show')->with('video', $video);
    }
}
