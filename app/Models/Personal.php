<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contact_name',
        'contact_email',
        'contact_phone',
        'address_street',
        'address_city',
        'address_country',
        'address_zip',
        'emergency_name',
        'emergency_number',
        'emergency_relationship',
        'referral_source',
        'referral_name'
    ];

}
