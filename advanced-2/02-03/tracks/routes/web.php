<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;

Route::get('/', [TrackController::class, 'index']);

Route::get('/profile/{name?}', function ($name = "Anonymus") {
    return "<h1>Hello". $name. "</h1>";
});

Route::get('/tracks/create', [TrackController::class, 'create'])->name('tracks.create');
Route::post('/tracks', [TrackController::class, 'store'])->name('tracks.store');

Route::prefix('auth')->group(function () {
    Route::get('login', function () {
        return view("auth.login");
    });
    Route::get('register', function () {
        return view("auth.register");
    });
});