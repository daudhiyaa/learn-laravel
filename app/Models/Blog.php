<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model {
    use HasFactory;
    protected $fillable = ['title', 'slug', 'author', 'content'];

    protected $with = ['author', 'category'];

    public function author(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters) {
        $query
            ->when($filters['search'] ?? false, function($query, $search) {
                $query->where('title', 'like', '%' . $search . '%');
            })
            ->when($filters['category'] ?? false, function($query, $category) {
                $query->whereHas('category', function($query) use ($category) {
                    $query->where('slug', $category);
                });
            })
            ->when($filters['author'] ?? false, function($query, $author) {
                $query->whereHas('author', function($query) use ($author) {
                    $query->where('username', $author);
                });
            });
    }
}
