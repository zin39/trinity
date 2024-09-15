<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    public function faqs()
    {
        return $this->belongsTo(Faq::class, 'category_id');
    }
}
