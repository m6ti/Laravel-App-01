<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    use HasFactory;
    protected $table = 'job_listings';

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    }
}
