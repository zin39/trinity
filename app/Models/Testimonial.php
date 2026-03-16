<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'message',
        'status',
        'type',
    ];

    public function scopeCandidate(Builder $query): Builder
    {
        return $query->where('type', 'candidate');
    }

    public function scopeEmployer(Builder $query): Builder
    {
        return $query->where('type', 'employer');
    }
}
