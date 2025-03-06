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
    });
    Route::get('register', function () {
        return "REGISTER";
      });
  });

Route::redirect('/auth', '/auth/login');