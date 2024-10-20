<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allies extends Model
{
    use HasFactory;

    protected $fillable = [
        'allies_title',
        'allies_image'
    ];
}
