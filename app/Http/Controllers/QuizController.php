<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class QuizController extends Controller
{
    /**
     * show introduction page
     */
    public function index()
    {
        $quiz_names = $this->get_quiz_names();

        return view('quiz.index', compact('quiz_names'));
    }

    /**
     * get specified quiz by name
     */
    public function show(String $quiz_name)
    {
        $quiz_names = $this->get_quiz_names();

        return view('quiz.show', compact('quiz_name', 'quiz_names'));
    }


    /**
     *   scans the js/quizzes folder and returns abbreviated filenames ready for quiz
     */
    public function get_quiz_names()
    {
        $quizzes = File::files(public_path('/js/quizzes'));

        $filenames = [];

        foreach ($quizzes as $quiz) {
            array_push($filenames, substr(pathinfo($quiz, PATHINFO_FILENAME),  0, -5));
        }

        return $filenames;
    }
}
