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

Route::get('/faq', function () {
    return view('guest.faq');
});

Route::get('/driving-lessons', function () {
    return view('guest.framework.index');
});

Route::get('/reviews', function () {
    return view('guest.reviews');
});

Route::get('/areas', function () {
    return view('guest.driving-lessons');
});

Route::get('/news', [NewsController::class, 'index']);

Route::get('/driving-lessons/{area}', [AreaController::class, 'show']);

Route::get('/parallel-parking', function () {
    return view('guest.parking');
});
