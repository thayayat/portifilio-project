<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'bio' => 'full stack developer',
        'title'=> 'laravel developer',
        'description' => 'iam a passionate software developer with experience in creating dynamic web applications.',
        'github' => 'Your GitHub Username',
        'linkedin' => 'Your LinkedIn Profile',
        'facebook' => 'Your Facebook Profile',
        'instagram' => 'Your Instagram Profile',
        'whatsapp' => 'Your WhatsApp Number'
    ];

}
