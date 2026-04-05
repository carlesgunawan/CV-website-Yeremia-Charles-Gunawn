<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page1');
})->name('home');

Route::get('/skills-projects', function () {
    return view('page2');
})->name('skills');
