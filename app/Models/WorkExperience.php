<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $fillable = [
        'title',
        'company',
        'date_range',
        'description',
        'tags',
        'order',
    ];

    protected $casts = [
        'tags' => 'array',
    ];
}
