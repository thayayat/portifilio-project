<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('Blogs', function () {
    return view('Blogs');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('Blogs', function () {
    return view('Blogs');
});

Route::get('services', function () {
    return view('services');
});
