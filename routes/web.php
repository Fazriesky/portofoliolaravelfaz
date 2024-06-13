<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/service', function () {
    return view('service');
}); 

Route::get('/contact', function () {
    return view('contact');
}); 