<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 
        'description', 
        'thumb', 
        'author', 
        'category', 
        'published',
    ];
    public $timestamps = false;
}