<?php

use App\Models\Blog;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home', 'header' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'header' => 'About Page']);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog',
        'header' => 'Blog Page',
        'blogs' => Blog::all()
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    $blog = Blog::find($slug);

    return view('blog-detail', ['title' => 'Single Post', 'header' => 'Blog Detail Page', 'blog' => $blog]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact', 'header' => 'Contact Page']);
});
