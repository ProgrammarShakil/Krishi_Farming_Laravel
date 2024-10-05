<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternApplication extends Model
{
    use HasFactory;

    // Define the fillable properties for mass assignment
    protected $fillable = ['name', 'email', 'phone_number', 'education', 'skills', 'interest', 'q1', 'q2', 'q3', 'q4', 'resume', 'photo'];
}
