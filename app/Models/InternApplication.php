<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternApplication extends Model
{
    use HasFactory;

    // Define the fillable properties for mass assignment
    protected $fillable = ['name', 'email', 'resume', 'photo'];
}
