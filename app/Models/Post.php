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
        'category_id'
    ];


    public function categories()
    {
        return $this->belongsTo(Comment::class, 'post_id');
    }
}
