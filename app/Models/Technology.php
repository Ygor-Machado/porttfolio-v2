<?php

namespace App\Models;

use App\TechnologyEnum;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $fillable = [
        'name',
        'xp',
        'icon',
        'category'
    ];

    protected $casts = [
        'category' => TechnologyEnum::class
    ];

}
