<?php

namespace App\Exports;

use App\Models\InternApplication;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InternApplicationExport implements FromCollection, WithHeadings
{
    /**
     * Fetch the intern application data and map it to a structured format.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return InternApplication::all()->map(function ($application) {
            return [
                'id' => $application->id,
                'name' => $application->name,
                'email' => $application->email,
                'phone_number' => $application->phone_number,
                'education' => $application->education,
                'skills' => $application->skills,
                'interest' => $application->interest,
                'q1' => $application->q1,
                'q2' => $application->q2,
                'q3' => $application->q3,
                'q4' => $application->q4,
                // Prepend the storage URL to the resume and photo fields
                'resume' => $application->resume ? url('storage/' . $application->resume) : null,
                'photo' => $application->photo ? url('storage/' . $application->photo) : null,
                'created_at' => $application->created_at->format('Y-m-d'), // Format the date
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
            'ID',
            'Name',
            'Email',
            'Phone Number',
            'Education',
            'Skills',
            'Interest',
            'Q1',
            'Q2',
            'Q3',
            'Q4',
            'Resume (Link)', // Updated heading for clarity
            'Photo (Link)',  // Updated heading for clarity
            'Application Date',
        ];
    }
}
