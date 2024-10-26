<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;
    protected $with = ['comments', 'category', 'author'];
    const DRAFT = 0;
    const PUBLISHED = 1;

    const STATUS = [
        self::DRAFT => "Draft",
        self::PUBLISHED => "Published",
    ];

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'content',
        'isPublished',
        'publishedAt',
        'thumbnail',
        'tags'
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    public function getImageAttribute()
    {
        $value = $this->attributes['thumbnail'];
        return asset('storage/' . $value);
    }

    public function getPostedAtAttribute()
    {
        $value = $this->attributes['publishedAt'];
        return Carbon::parse($value);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
