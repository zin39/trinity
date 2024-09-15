<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title', 'slug', 'content', 'short_content', 'parent_id'
    ];

    public function sub_pages()
    {
        return $this->hasMany(Page::class, 'parent_id');
    }
}
