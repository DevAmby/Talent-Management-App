<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        
        'education_school',
        'education_location',
        'education_course',
        'education_degree',
        'education_graduation',
        
        'work_facility',
        'work_start_date',
        'work_end_date',
        'work_street',
        'work_city',
        'work_postal',
        'work_job',
        'work_unit',
        'work_unit_beds',
        'work_patient',

        'resume_image',
 
    ];


}
