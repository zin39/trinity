<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function categories() {
        return $this->belongsToMany(EventCategory::class, 'event_category_event');
    }
}
