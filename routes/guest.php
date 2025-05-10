<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\NewsController;

Route::get('/prices', function () {
    return view('guest.prices');
});

Route::get('/contact', function () {
    return view('guest.contact');
});

Route::post('/contact', [ContactController::class, 'store']);


Route::get('/driving-lessons', function () {
    return view('guest.framework.index');
});

Route::get('/areas-covered', function () {
    return view('guest.areas-covered');
});

Route::get('/reviews', function () {
    return view('guest.reviews');
});

Route::get('/news', [NewsController::class, 'index']);

Route::get('/driving-lessons-in-{area}', [AreaController::class, 'show']);
