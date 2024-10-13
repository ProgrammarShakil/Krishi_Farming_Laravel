<?php

namespace App\Exports;

use App\Models\JobApplicant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class JobApplicantsExport implements FromCollection, WithHeadings
{
    /**
     * Return the data for export with specific fields.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return JobApplicant::all()->map(function ($applicant) {
            return [
                'id' => $applicant->id,
                'name' => $applicant->name,
                'phone' => $applicant->phone,
                'email' => $applicant->email,
                'educational_qualification' => $applicant->educational_qualification,
                'special_skills' => $applicant->special_skills,
                'expected_salary' => $applicant->expected_salary,
                'q1' => $applicant->q1,
                'q2' => $applicant->q2,
                'q3' => $applicant->q3,
                'q4' => $applicant->q4,
                // Prepend the storage URL to the cv and photo fields
                'cv' => $applicant->cv ? url('storage/' . $applicant->cv) : null,
                'photo' => $applicant->photo ? url('storage/' . $applicant->photo) : null,
                'job_circular_id' => $applicant->job_circular_id,
                'created_at' => $applicant->created_at->format('Y-m-d'),
            ];
        });
    }

    /**
     * Define the headings for each column.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Phone',
            'Email',
            'Educational Qualification',
            'Special Skills',
            'Expected Salary',
            'Q1',
            'Q2',
            'Q3',
            'Q4',
            'CV (Link)',
            'Photo (Link)',
            'Job Circular ID',
            'Application Date',
        ];
    }
}
