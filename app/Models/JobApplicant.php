<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'phone', 
        'email', 
        'educational_qualification', 
        'special_skills', 
        'expected_salary', 
        'q1', 
        'q2', 
        'q3', 
        'q4', 
        'cv', 
        'photo', 
        'job_circular_id'
    ];

    // Define the inverse relationship with JobCircular
    public function jobCircular()
    {
        return $this->belongsTo(JobCircular::class, 'job_circular_id');
    }
}
