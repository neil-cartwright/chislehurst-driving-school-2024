<?php

use App\Http\Controllers\DriverActiveController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TextbookController;
use App\Http\Controllers\HandoutController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TestRouteController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('/user/lessons', [UserController::class, 'lessons'])->name('user.lessons');
    /* handouts */
    Route::get('/handouts', [HandoutController::class, 'index'])->name('handouts');
    Route::get('/handouts/{file_name}', [HandoutController::class, 'show'])->name('handouts.show');
    /* text books */
    Route::get('/text-books', [TextbookController::class, 'index'])->name('text-books');
    Route::get('/text-books/{book}/{chapter}', [TextbookController::class, 'show'])->name('text-books.show');
    /* videos */
    Route::get('/videos', [VideoController::class, 'index'])->name('videos');
    Route::get('/videos/{author}', [VideoController::class, 'show'])->name('videos.show');

    Route::get('/test/routes/video/{route}', [TestRouteController::class, 'video'])->name('test.dashcam');

    Route::get('/driver-active', [DriverActiveController::class, 'index'])->name('driver-active');
});

/* test routes */
Route::get('/tests/routes/{area?}', [TestRouteController::class, 'show'])->name('test.routes');
Route::get('/test/routes/{area}/{id}', [TestRouteController::class, 'old_routes'])->name('test.routes');
