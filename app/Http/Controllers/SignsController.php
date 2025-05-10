<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SignsController extends Controller
{

    public function index()
    {
        return $this->show('bus-and-cycle-signs');
    }
    /**
     * show
     */
    public function show($type)
    {
        $driving_image_info = $this->get_driving_images($type);

        $img_urls = $driving_image_info['img_urls'];
        $type = $driving_image_info['type'];
        $directory_urls = $driving_image_info['directory_urls'];

        return view('signs/show', compact(['img_urls', 'type', 'directory_urls']));
    }

    /**
     * get directories of images
     */
    public function get_driving_images($type)
    {

        $local_env = App::environment() == 'local';

        if ($local_env) {
            $dir_path = public_path() . '/img/driving-images/';
        } else {
            $dir_path = public_path() . '/../../img/driving-images/';
        }

        $directory_urls = scandir($dir_path);
        $type = $type;

        $signs = $dir_path . $type . '/';


        /* check to see if directory acutally exists */
        if (is_dir($signs)) {
            $img_urls = scandir($signs);
        } else {
            $type = 'traffic-calming';
            $signs = $dir_path . $type . '/';
            $img_urls = scandir($signs);
        }

        $driving_image_info = [
            'directories' => $dir_path,
            'directory_urls' => $directory_urls,
            'type' => $type,
            'signs' => $signs,
            'img_urls' => $img_urls
        ];

        return $driving_image_info;
    }
}
