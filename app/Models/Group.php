<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name', 'description', 'user_id',
    ];

    // Define a one-to-many relationship with the User model (group creator).
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Define a many-to-many relationship with the User model (group members).
    public function members()
    {
        return $this->belongsToMany(User::class, 'group_user', 'group_id', 'user_id')
            ->withTimestamps();
    }

    // Define a one-to-many relationship with the Post model (group posts).
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
