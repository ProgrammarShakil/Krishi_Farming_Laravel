<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentApplicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'proposer_name',
        'phone_number',
        'email',
        'address',
        'proposal_amount',
        'proposal_details',
        'attachments',
        'investment_proposal_id',
    ];

    protected $casts = [
        'attachments' => 'array', // Cast attachments as an array
    ];

    // Define the inverse relationship with Investment Proposal
    public function InvestmentProposal()
    {
        return $this->belongsTo(InvestmentProposal::class, 'investment_proposal_id');
    }
}
