<?php

namespace App\Http\Controllers;

use App\Models\DriverActive;

class DriverActiveController extends Controller
{

    public $basic_skills;
    public $road_skills;
    public $using_your_skills;

    public function __construct(DriverActive $driver_active)
    {
        $this->basic_skills = $driver_active->basic_skills;
        $this->road_skills = $driver_active->road_skills;
        $this->using_your_skills = $driver_active->using_your_skills;
    }

    public function index()

    {
        return view('driver-active.index')->with('basic_skills', $this->basic_skills)->with('road_skills', $this->road_skills)->with('using_your_skills', $this->using_your_skills);
    }
}
