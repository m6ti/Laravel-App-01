<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    use HasFactory;

    protected $table = 'hashtags';

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_hashtag');
    }

    public function comments()
    {
        return $this->belongsToMany(Comment::class, 'comment_hashtag');
    }
}
