<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverActive extends Model
{

    public $basic_skills = array(
        'Cockpit Drill' => 'Basic/Cockpit_drill/cockpit_drill',
        'Controls' => 'Basic/Controls_lesson/controls_intro',
        'Moving Off' => 'Basic/Moving_off/moving_off',
        'Stopping' => 'Basic/Stopping/stopping',
        'Gears' => 'Basic/Gears/gears',
        'Steering' => 'Basic/Steering/steering',
        'Skills Development' => 'Basic/Skill_development/Sd_intro',
        'Emergency Stop' => 'Basic/Emergency_Stop/ES_Intro'
    );

    public $road_skills = array(
        'Signals' => 'Road_skills/Signals/Signals',
        'Hazard Routine' => 'Road_skills/Hazard_routine/Haz_Routine',
        'Meeting other traffic' => 'Road_skills/Meeting/Meeting',
        'Junctions: Turning left' => 'Road_skills/left_turns/left_turns',
        'Junctions: Emerging' => 'Road_skills/Emerging/emerge_',
        'Reversing: Straight' => 'Road_skills/RevStraight/Rev_Straight',
        'Junctions: Turning right' => 'Road_skills/TurningRight/Turn_Right',
        'Crossroads' => 'Road_skills/Crossroads/Crossroads',
        'Reversing: Right' => 'Road_skills/RevRight/RR',
        'Essential Safety Tips: Concentration | Observation | Anticipation | Risk' => 'Road_skills/Essential_tips/essential_tips',
        'Roundabouts' => 'Road_skills/Roundabouts/Roundabouts',
        'Stopping on the right' => 'Road_skills/stop_on_right/stop_on_right',
        'Driving in a bubble' => 'Road_skills/SafetyBubble/SafetyBubble'
    );

    public $using_your_skills = array(
        'Reversing: Left' => 'New_places/Reversing_left/RL_',
        'Car Parks & Bay Parking' => 'New_places/Car_parks/Car_parks_',
        'Turning around' => 'New_places/Turn_in_the_road/Turn_in_the_road',
        'Parallel Parking' => 'New_places/Parallel_parking/Par_pk_',
        'Traffic Lights' => 'New_places/Traffic_lights/TL_',
        'Overtaking' => 'New_places/Overtaking/OT_',
        'Pedestrians - Crossing & Safety' => 'New_places/Pedestrian_safety/Ped_',
        'Railway level crossings' => 'New_places/Level_crossings/LC_',
        'Dual-carriageways' => 'New_places/Dual_carrigeways/DC_',
        'Road Markings' => 'New_places/Road_markings/rm_',
        'One-way Systems' => 'New_places/One_way_systems/onew',
        'All weather driving' => 'New_places/Weather/weather_',
        'Show/Tell test questions' => 'New_places/ShowMeTellme/ShowMe_TellMe',
        'Motorway driving' => 'New_places/motorway/motorway',
        'After you pass' => 'After/After'

    );
}
