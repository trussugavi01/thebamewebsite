<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteMetric extends Model
{
    protected $fillable = [
        'metric_key',
        'metric_value',
        'metric_label',
        'icon',
        'order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
