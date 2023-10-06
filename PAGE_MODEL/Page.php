<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title', 'description', 'user_id',
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'page_user', 'page_id', 'user_id')
            ->withTimestamps();
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
