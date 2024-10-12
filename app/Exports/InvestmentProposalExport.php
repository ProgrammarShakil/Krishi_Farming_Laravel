<?php

namespace App\Exports;

use App\Models\InvestmentProposal;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class InvestmentProposalExport implements FromCollection, WithHeadings, WithMapping
{
    protected $startDate;
    protected $endDate;

    /**
     * Constructor to accept dynamic filters.
     *
     * @param string|null $startDate
     * @param string|null $endDate
     */
    public function __construct($startDate = null, $endDate = null)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * Retrieve all or filtered investment proposals.
     * 
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $query = InvestmentProposal::query();

        // Apply date filtering if provided
        if ($this->startDate && $this->endDate) {
            $query->whereBetween('created_at', [$this->startDate, $this->endDate]);
        }

        return $query->get();
    }

    /**
     * Define the headers for the Excel sheet.
     * 
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Project Name',
            'Project Details',
            'Video URL',
            'Proposal Date',
        ];
    }

    /**
     * Map the data for each row before exporting.
     * 
     * @param  \App\Models\InvestmentProposal  $proposal
     * @return array
     */
    public function map($proposal): array
    {
        return [
            $proposal->id,
            $proposal->project_name,
            $proposal->project_details,
            $proposal->video,
            $proposal->created_at->format('Y-m-d'), // Format the date as Y-m-d
        ];
    }
}
