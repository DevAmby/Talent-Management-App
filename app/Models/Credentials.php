<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credentials extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        
        'licenses_license',
        'licenses_state',
        'licenses_expiration',
        'licenses_number',
        'licenses_image',
        
        'client_certification',
        'client_expiration',
        'client_number',
        'client_image',
        
        'employment_license',
        'employment_state',
        'employment_expiration',
        'employment_number',
        'employment_image',
        
        'certifications_license',
        'certifications_state',
        'certifications_expiration',
        'certifications_number',
        'certifications_image',
        
        'medical_license',
        'medical_state',
        'medical_expiration',
        'medical_number',
        'medical_image',
        
        'training_licesnse',
        'training_state',
        'training_expiration',
        'training_number',
        'training_image',
        
        'additional_license',
        'additional_state',
        'additional_expiration',
        'additional_number',
        'additional_image',
        
        'background_license',
        'background_state',
        'background_expiration',
        'background_number',
        'background_image',
        
        'hr_license',
        'hr_state',
        'hr_expiration',
        'hr_number',
        'hr_image',



    ];


}
