<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon_class',
        'color',
        'category',
        'proficiency',
        'is_active',
        'display_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'proficiency' => 'integer'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('display_order')->orderBy('name');
    }

    public function getIconHtmlAttribute()
    {
        if ($this->icon_class) {
            return '<i class="' . $this->icon_class . ' text-' . $this->color . '"></i>';
        }
        return '<span class="text-gray-500">🔹</span>';
    }
}
