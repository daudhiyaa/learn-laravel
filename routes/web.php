<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home', 'header' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'header' => 'About Page']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'header' => 'Blog Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact', 'header' => 'Contact Page']);
});
