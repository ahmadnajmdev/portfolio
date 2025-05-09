<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name',
        'category',
        'proficiency',
        'icon',
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'proficiency' => 'integer',
        'is_featured' => 'boolean',
    ];
}
