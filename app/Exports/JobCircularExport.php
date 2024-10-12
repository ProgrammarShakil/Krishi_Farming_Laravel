<?php

namespace App\Exports;

use App\Models\JobCircular;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class JobCircularExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * Get all job circulars data.
     */
    public function collection()
    {
        return JobCircular::all();
    }

    /**
     * Map the data for each circular.
     */
    public function map($circular): array
    {
        return [
            $circular->position_name,
            $circular->vacancy_number,
            $circular->job_location,
            $circular->educational_requirements,
            $circular->additional_requirements,
            $circular->responsibilities,
            $circular->compensation,
            $circular->workplace,
            $circular->employment_status,
            $circular->gender,
            $circular->published_date->format('d-m-Y'),
            $circular->circular_closing_date->format('d-m-Y'),
        ];
    }

    /**
     * Define the headers for the Excel export.
     */
    public function headings(): array
    {
        return [
            'Position Name',
            'Vacancy Number',
            'Job Location',
            'Educational Requirements',
            'Additional Requirements',
            'Responsibilities',
            'Compensation',
            'Workplace',
            'Employment Status',
            'Gender',
            'Published Date',
            'Closing Date',
        ];
    }
}
