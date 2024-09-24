<?php

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
        'blogs' => [
            ['id' => 1, 'slug' => 'blog-post-1', 'title' => 'Blog Post 1', 'author' => 'Daud', 'content' => 'This is the first blog post'],
            ['id' => 2, 'slug' => 'blog-post-2', 'title' => 'Blog Post 2', 'author' => 'Daud', 'content' => 'This is the second blog post'],
            ['id' => 3, 'slug' => 'blog-post-3', 'title' => 'Blog Post 3', 'author' => 'Daud', 'content' => 'This is the third blog post'],
        ]
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    $blogs = [
        ['id' => 1, 'slug' => 'blog-post-1', 'title' => 'Blog Post 1', 'author' => 'Daud', 'content' => 'This is the first blog post'],
        ['id' => 2, 'slug' => 'blog-post-2', 'title' => 'Blog Post 2', 'author' => 'Daud', 'content' => 'This is the second blog post'],
        ['id' => 3, 'slug' => 'blog-post-3', 'title' => 'Blog Post 3', 'author' => 'Daud', 'content' => 'This is the third blog post'],
    ];

    $blog = Arr::first(array_filter($blogs, fn($blog) => $blog['slug'] == $slug));

    return view('blog-detail', ['title' => 'Single Post', 'header' => 'Blog Detail Page', 'blog' => $blog]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact', 'header' => 'Contact Page']);
});
