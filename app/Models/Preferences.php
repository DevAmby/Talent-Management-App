<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preferences extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'Work_preference_date',
        'work_preference_position',
        'work_locations',
        'preference_notification'
        
        
    ];
}
