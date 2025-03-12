<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;

Route::get('/', function () {
    return view("landing.hero", data: ["name" => "Bendi"]);
});

Route::get('/tracks', [TrackController::class, 'index'])->name('tracks.index');

Route::get('/hello/{name?}', function ($name = "Anonymus") {
    return "<h1>Hello ". $name ."!</h1>";
});

Route::get('/tracks/create', [TrackController::class, 'create'])->name('tracks.create');

Route::post('/tracks', [TrackController::class, 'store'])->name('tracks.store');


Route::prefix('auth')->group(function () {
    Route::get('login', function () {
        return view("auth.login", data: ["name" => "Bendi"]);
    })->name('login');
    Route::get('register', function () {
        return "REGISTER";
      })->name('register');
  });

Route::redirect('/auth', '/auth/login');

Route::get('/tracks/{trackId}/edit', [TrackController::class, 'edit'])->name('tracks.edit');

Route::put('/tracks/{trackId}', [TrackController::class, 'update'])->name('tracks.update');

Route::delete('/tracks/{trackId}', [TrackController::class, 'destroy'])->name('tracks.destroy');

