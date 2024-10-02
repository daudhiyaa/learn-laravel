<?php

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home', 'header' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'header' => 'About Page']);
});

Route::get('/blog', function () {
    // $blogs = Blog::with(['author', 'category'])->get();

    return view('blog', [
        'title' => 'Blog',
        'header' => 'Blog Page',
        'blogs' => Blog::all()
    ]);
});

// specify `blog:slug` karena defaultnya adalah `blog:id`
Route::get('/blog/{blog:slug}', function (Blog $blog) { // This is the route model binding
    return view('blog-detail', ['title' => 'Single Post', 'header' => 'Blog Detail Page', 'blog' => $blog]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $blogs = $user->blogs->load('author', 'category');

    return view('blog', [
        'title' => 'Author: ' . $user->name,
        'header' => count($user->blogs) . ' Blogs by ' . $user->name,
        'blogs' => $user->blogs
    ]);
});

// specify `category:slug` karena defaultnya adalah `category:id`
Route::get('/categories/{category:slug}', function (Category $category) {
    // $blogs = $category->blogs->load('author', 'category');

    return view('blog', [
        'title' => 'Category: ' . $category->name,
        'header' => count($category->blogs) . ' Blogs in: ' . $category->name,
        'blogs' => $category->blogs
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact', 'header' => 'Contact Page']);
});
