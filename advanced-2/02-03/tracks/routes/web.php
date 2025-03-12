<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{name?}', function ($name = "Anonymus") {
    return "<h1>Hello". $name. "</h1>";
});

Route::get('/tracks/create', [TrackController::class, 'create'])->name('tracks.create');
Route::post('/tracks', [TrackController::class, 'store'])->name('tracks.store');
Route::get('/tracks', [TrackController::class, 'viewTracks'])->name('tracks.viewTracks');

Route::delete('/tracks/{id}', [TrackController::class, 'delete'])->name('tracks.delete');
Route::prefix('auth')->group(function () {
    Route::get('login', function () {
        return view("auth.login");
    });
    Route::get('register', function () {
        return view("auth.register");
    });
});


Route::get('/tracks/edit/{id}', [TrackController::class, 'edit'])->name('tracks.edit');
Route::put('/tracks/edit/{id}', [TrackController::class, 'update'])->name('tracks.update');