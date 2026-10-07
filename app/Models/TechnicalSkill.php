<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechnicalSkill extends Model
{
    protected $fillable = [
        'category',
        'percentage',
        'tags',
        'order',
    ];

    protected $casts = [
        'tags' => 'array',
    ];
}
