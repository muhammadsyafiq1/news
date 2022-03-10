<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'author',
        'title',
        'slug',
        'image',
        'views',
        'body',
        'quote',
    ];


    public function categories()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
