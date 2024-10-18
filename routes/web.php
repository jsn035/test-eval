<?php

use App\Http\Controllers\TrendingsController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TrendingsController::class, 'index']);

Route::resource('trendings', TrendingsController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
