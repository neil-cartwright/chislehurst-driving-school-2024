<?php

use App\Http\Controllers\RoutesAppController;
use Illuminate\Support\Facades\Route;

Route::get('/routes-app/{area}', [RoutesAppController::class, 'index'])->name('routes-app');
