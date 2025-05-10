<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/artisan/cache/clear', function () {
    Artisan::call('cache:clear');
    dd('clear');
});
Route::get('/artisan/config/clear', function () {
    Artisan::call('config:clear');
    dd('config clear');
});
Route::get('/artisan/view/clear', function () {
    Artisan::call('view:clear');
    dd('view clear');
});
Route::get('version', function () {
    dd(app()->version());
});
Route::get('/artisan/optimize', function () {
    Artisan::call('optimize');
    dd('optimize');
});
