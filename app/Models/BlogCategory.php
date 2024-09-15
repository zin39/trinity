<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Blog::class, 'blog_category_blog');
    }
}
