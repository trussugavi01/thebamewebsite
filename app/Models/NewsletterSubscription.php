<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsletterSubscription extends Model
{
    protected $fillable = [
        'email',
        'awards_news',
        'summit_updates',
        'partner_opportunities',
        'subscribed_at',
        'unsubscribed_at',
        'is_active'
    ];

    protected $casts = [
        'awards_news' => 'boolean',
        'summit_updates' => 'boolean',
        'partner_opportunities' => 'boolean',
        'subscribed_at' => 'datetime',
        'unsubscribed_at' => 'datetime',
        'is_active' => 'boolean'
    ];
}
