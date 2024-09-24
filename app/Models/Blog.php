<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Blog {
    public static function all() {
        return [
            ['id' => 1, 'slug' => 'blog-post-1', 'title' => 'Blog Post 1', 'author' => 'Daud', 'content' => 'This is the first blog post'],
            ['id' => 2, 'slug' => 'blog-post-2', 'title' => 'Blog Post 2', 'author' => 'Daud', 'content' => 'This is the second blog post'],
            ['id' => 3, 'slug' => 'blog-post-3', 'title' => 'Blog Post 3', 'author' => 'Daud', 'content' => 'This is the third blog post'],
        ];
    }

    public static function find($slug): array {
        $blog = Arr::first(array_filter(static::all(), fn($blog) => $blog['slug'] == $slug));

        if (!$blog) {
            abort(404);
        }

        return $blog;
    }
}
