<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/quiz', [QuizController::class, 'index']);
Route::get('/quiz/{quizName}', [QuizController::class, 'show']);
