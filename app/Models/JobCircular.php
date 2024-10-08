<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCircular extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'position_name', 
        'vacancy_number', 
        'job_location', 
        'educational_requirements', 
        'additional_requirements',
        'responsibilities', 
        'compensation', 
        'workplace', 
        'employment_status', 
        'gender', 
        'published_date', 
        'circular_closing_date'
    ];

    protected $dates = [
        'published_date',
        'circular_closing_date',
    ];
}
