<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'title',
        'slug',
        'content',
    ];

    /**
     * The users that belong to the post.
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
