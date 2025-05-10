<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\HomeworkEmail;
use App\Models\Customer;
use App\Models\Video;
use App\Models\DriverActive;
use Carbon\Carbon;
use Exception;

class HomeworkController extends Controller
{
    public $world_driving_videos;
    public $learn_engineering_videos;
    public $science_garage_videos;
    public $road_safety_videos;
    public $think_videos;
    public $advance_driving_videos;
    public $driver_active;

    public function __construct(Video $video, DriverActive $driver_active)
    {
        $this->world_driving_videos = $video->world_driving_videos;
        $this->learn_engineering_videos = $video->learn_engineering_videos;
        $this->science_garage_videos = $video->science_garage_videos;
        $this->road_safety_videos = $video->road_safety_videos;
        $this->think_videos = $video->think_videos;
        $this->advance_driving_videos = $video->advance_driving_videos;

        $this->driver_active['basic_skills'] = $driver_active->basic_skills;
        $this->driver_active['road_skills'] = $driver_active->road_skills;
        $this->driver_active['using_your_skills'] = $driver_active->using_your_skills;
    }

    public function create(Customer $customer, $id)
    {
        $roadcraft_chapters = array_slice(scandir(resource_path('text-books/roadcraft')), 2);
        $handouts = array_slice(scandir(resource_path('driver-active')), 2);
        $essential_skills = array_slice(scandir(resource_path('text-books/essential-skills')), 2);
        $highway_code = array_slice(scandir(resource_path('text-books/highway-code')), 2);
        $emergency_vehicles = array_slice(scandir(resource_path('text-books/dia')), 2);
        $know_your_road_signs = array_slice(scandir(resource_path('text-books/know-your-road-signs')), 2);
        $how_cars_work_chapters = array_slice(scandir(resource_path('text-books/how-cars-work')), 2);

        $world_driving_videos = $this->world_driving_videos;
        $learn_engineering_videos = $this->learn_engineering_videos;
        $science_garage_videos = $this->science_garage_videos;
        $road_safety_videos = $this->road_safety_videos;
        $think_videos = $this->think_videos;
        $advance_driving_videos = $this->advance_driving_videos;

        /* temp array by reference */
        $allBooks = array(&$roadcraft_chapters, &$handouts, &$essential_skills, &$highway_code, &$emergency_vehicles, &$know_your_road_signs, &$how_cars_work_chapters);

        /* remove .pdf from filename */
        for ($i = 0, $size = count($allBooks); $i < $size; $i++) {
            for ($j = 0, $siz = count($allBooks[$i]); $j < $siz; $j++) {
                $allBooks[$i][$j] = basename($allBooks[$i][$j], '.pdf');
            }
        }
        /* driver active array of arrays */
        $driver_active = $this->driver_active;

        $customer = Customer::where('id', $id)->first();

        return view('admin.homework.create', compact(['customer', 'handouts', 'essential_skills', 'highway_code', 'emergency_vehicles', 'know_your_road_signs', 'roadcraft_chapters', 'how_cars_work_chapters', 'world_driving_videos', 'learn_engineering_videos', 'science_garage_videos', 'road_safety_videos', 'think_videos', 'advance_driving_videos', 'driver_active']));
    }

    public function send(Request $request, $id)
    {

        $request->validate([
            'homework' => ['required'],
        ]);

        $customer = Customer::find($id);

        $name = $customer->name;
        $firstname = strtok($name, ' ');
        $email = $customer->email;
        $email_subject = 'Driving Lesson Links: ' . Carbon::now()->format('l jS M Y');
        $from = 'neil@chislehurstdrivingschool.co.uk';

        $homework_links = $request->input('homework');


        try {
            Mail::to($email)->send(new HomeworkEmail($firstname, $email, $email_subject, $homework_links));
            return response('email sent');
        } catch (Exception $error) {
            return response($error);
        }
    }
}
