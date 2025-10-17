<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RH\AreasController;

Route::get('/', function () {
   return view('admin.dashboard');
})->name('dashboard');

Route::resource('areas', AreasController::class)->except(['show']);
