<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'specialty',
        'experience',
        'education',
        'about',
        'awards',
        'skills',
        'socials',
    ];

    protected $casts = [
        'awards' => 'array',
        'skills' => 'array',
        'social' => 'array',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
