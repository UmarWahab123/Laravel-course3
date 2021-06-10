<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";

    //function for one to many relation
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
