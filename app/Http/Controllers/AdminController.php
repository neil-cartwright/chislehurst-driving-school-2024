<?php

namespace App\Http\Controllers;

use App\Http\Controllers\LessonController;

class AdminController extends Controller
{

    /**
     * display the admin home view with all lessons
     */
    public function index()
    {
        $controller = new LessonController;

        return $controller->index();
    }
}
