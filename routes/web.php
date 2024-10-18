<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [
	App\Http\Controllers\TrendingsController::class,
	'index'
]);

Route::resource(
	'trendings',
	App\Http\Controllers\TrendingsController::class
);

Route::middleware([
	'auth:sanctum',
	config('jetstream.auth_session'),
	'verified',
])->group(function () {
	Route::prefix('dashboard')
		->group(function () {
			Route::get('/', function () {
				return view('dashboard');
			})->name('dashboard');

			Route::get('/trendings', [
				App\Http\Controllers\Dashboard\TrendingsController::class,
				'index'
			])->name('dashboard-trendings');

			Route::resource(
				'trendings',
				App\Http\Controllers\Dashboard\TrendingsController::class
			);
		});
});
