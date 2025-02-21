<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("landing.hero", data: ["name" => "Bendi"]);
});

Route::get('/hello/{name?}', function ($name = "Anonymus") {
    return "<h1>Hello ". $name ."!</h1>";
});

Route::prefix('auth')->group(function () {
    Route::get('login', function () {
        return view("auth.login", data: ["name" => "Bendi"]);
    });
    Route::get('register', function () {
        return "REGISTER";
      });
  });

Route::redirect('/auth', '/auth/login');