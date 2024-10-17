<?php

use App\Http\Controllers\TrendingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
});

Route::resource('trendings', TrendingsController::class);
