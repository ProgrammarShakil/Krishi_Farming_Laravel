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
            // Decode the attachment JSON into an array
            $attachments = json_decode($proposal->attachment_name, true);

            // Prepend the domain to each attachment path and join them as a single string
            $attachmentUrls = is_array($attachments)
                ? collect($attachments)->map(function ($attachment) {
                    return url('storage/' . $attachment); // Prepend the URL path
                })->implode(', ') // Join them into a single string
                : null;

            return [
                'id' => $proposal->id,
                'owner_name' => $proposal->owner_name,
                'phone_number' => $proposal->phone_number,
                'email' => $proposal->email,
                'organisation_name' => $proposal->organisation_name,
                'address' => $proposal->address,
                'proposal_details' => $proposal->proposal_details,
                'attachment_name' => $attachmentUrls, // Display URLs as a string
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
            'Attachment Name (Links)',
            'Proposal Date',
        ];
    }
}
