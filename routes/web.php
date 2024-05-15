<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/person');

Route::get('/person', [PersonController::class, 'index']);
Route::post('/person', [PersonController::class, 'store']);
Route::get('/person/create', [PersonController::class, 'create']);

Route::get('/address/create/{id}', [AddressController::class, 'create']);
Route::post('/address', [AddressController::class, 'create']);
Route::get('/show/{id}', [PersonController::class, 'show']);


require __DIR__.'/auth.php';
