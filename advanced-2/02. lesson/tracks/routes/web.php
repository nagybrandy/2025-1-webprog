<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("main.landing", ["name" => "Bendi"]);
});


Route::get('/profile/{name?}', function ($name = "Anonymus") {
    return "<h1>Hello". $name. "</h1>";
});

Route::prefix('auth')->group(function () {
    Route::get('login', function () {
        return view("auth.login");
    });
    Route::get('register', function () {
        return view("auth.register");
    });
  });