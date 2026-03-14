<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'area_of_enquiry',
        'company',
        'comments',
        'respond_by_phone',
        'respond_by_email',
        'is_read',
    ];
}
