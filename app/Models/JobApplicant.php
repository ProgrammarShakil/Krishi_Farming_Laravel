<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone', 'email', 'educational_qualification', 
        'special_skills', 'expected_salary', 'problem_solving_in_agriculture', 
        'help_bdkrishi_succeed', 'career_goals', 'past_projects', 'cv', 'photo', 
        'job_circular_id'
    ];
}
