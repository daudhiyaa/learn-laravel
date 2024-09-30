<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model {
    use HasFactory;
    protected $fillable = ['title', 'slug', 'author', 'content'];

    public function author(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
