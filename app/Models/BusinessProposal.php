<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessProposal extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_name', 
        'phone_number', 
        'email', 
        'organisation_name', 
        'address', 
        'proposal_details', 
        'attachment_name', 
        'attachments'
    ];

    protected $casts = [
        'attachments' => 'array',
    ];
}
