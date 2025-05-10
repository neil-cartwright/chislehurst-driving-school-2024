<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignsController;

Route::get('/signs', [SignsController::class, 'index']);
Route::get('/signs/{type}', [SignsController::class, 'show']);
