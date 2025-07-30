<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = [
        'cover_image',
        'blog_url',
        'title',
        'description',
        'author',
    ];
}
