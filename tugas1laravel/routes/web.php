<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//ini tugasnya ya kaa:)
Route::get('/home', function () {
    return view('home');
});

