<?php

use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/person', [PersonController::class, 'index']);
Route::post('/person', [PersonController::class, 'store']);
Route::get('/person/create', [PersonController::class, 'create']);

require __DIR__.'/auth.php';
