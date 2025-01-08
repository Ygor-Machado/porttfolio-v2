<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'image',
        'description',
        'github_link',
        'deploy_link'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
