<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        "title",
        "desc",
        "location",
        "image",
        "user_id",
    ];



    public function getImageAttribute($value)
    {
        return 'images/posts/images/'.$value;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
