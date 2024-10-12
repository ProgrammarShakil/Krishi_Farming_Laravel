<?php

namespace App\Exports;

use App\Models\BrandFranchiseProposal;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BrandFranchiseExport implements FromCollection, WithHeadings
{
    /**
     * Return the collection of investment proposals for export.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return BrandFranchiseProposal::all()->map(function ($proposal) {
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

    /**
     * Define the headings for the exported file.
     *
     * @return array
     */
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
