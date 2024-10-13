<?php

namespace App\Exports;

use App\Models\InvestmentApplicant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InvestmentApplicantExport implements FromCollection, WithHeadings
{
    /**
     * Fetch and return only the fillable fields from the InvestmentApplicant model.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return InvestmentApplicant::all()->map(function ($applicant) {
            // Decode the attachments JSON into an array
            $attachments = json_decode($applicant->attachments, true);

            // Prepend the domain to each attachment path and join them as a single string
            $attachmentUrls = is_array($attachments)
                ? collect($attachments)->map(function ($attachment) {
                    return url('storage/' . $attachment); // Prepend the URL path
                })->implode(', ') // Join them into a single string
                : null;

            return [
                'proposer_name' => $applicant->proposer_name,
                'phone_number' => $applicant->phone_number,
                'email' => $applicant->email,
                'address' => $applicant->address,
                'proposal_amount' => $applicant->proposal_amount,
                'proposal_details' => $applicant->proposal_details,
                'attachments' => $attachmentUrls, // Display URLs as a string
                'investment_proposal_id' => $applicant->investment_proposal_id,
            ];
        });
    }

    /**
     * Define the column headings for the Excel export.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'Proposer Name',
            'Phone Number',
            'Email',
            'Address',
            'Proposal Amount',
            'Proposal Details',
            'Attachments (Links)',
            'Investment Proposal ID',
        ];
    }
}
