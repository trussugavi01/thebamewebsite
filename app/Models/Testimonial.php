<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'quote',
        'author_name',
        'author_title',
        'author_organization',
        'author_photo',
        'video_url',
        'featured',
        'order',
        'is_active'
    ];

    protected $casts = [
        'featured' => 'boolean',
        'is_active' => 'boolean'
    ];
}
