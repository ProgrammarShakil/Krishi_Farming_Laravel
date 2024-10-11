<?php

namespace App\Exports;

use App\Models\BusinessProposal;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BusinessProposalsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return BusinessProposal::all()->map(function ($proposal) {
            return [
                'id' => $proposal->id,
                'owner_name' => $proposal->owner_name,
                'phone_number' => $proposal->phone_number,
                'email' => $proposal->email,
                'organisation_name' => $proposal->organisation_name,
                'address' => $proposal->address,
                'proposal_details' => $proposal->proposal_details,
                'attachment_name' => $proposal->attachment_name,
                'created_at' => $proposal->created_at->format('Y-m-d'),
            ];
        });
    }


    public function headings(): array
    {
        return [
            'ID',
            'Owner Name',
            'Phone Number',
            'Email',
            'Organisation Name',
            'Address',
            'Proposal Details',
            'Attachment Name',
            'Proposal Date',
        ];
    }
}
