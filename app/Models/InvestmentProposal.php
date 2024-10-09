<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentProposal extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'project_details',
        'video',
    ];
}
