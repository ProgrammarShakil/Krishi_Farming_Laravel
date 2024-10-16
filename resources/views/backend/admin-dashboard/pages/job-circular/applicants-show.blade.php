@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Show Applicants')

@section('content')

    <div class="container">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->

            <div id="content">
                <!-- Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="m-0 font-weight-bold text-primary">Job Title: {{$applicant->jobCircular->position_name}} </h5>
                            <a href="{{ route('admin.job.applicants.download', ['id' => $applicant->id]) }}"
                                class="btn btn-success">
                                <i class="fas fa-download"></i> Download <i class="fas fa-file-pdf"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <p><img src="{{ asset('storage/' . $applicant->photo) }}" alt=""></p>
                            <p><strong>Name:</strong> {{ $applicant->name }}</p>
                            <p><strong>Phone:</strong> {{ $applicant->phone  }}</p>
                            <p><strong>Email:</strong> {{ $applicant->email }}</p>
                            <p><strong>Employment Status:</strong> {{ $applicant->educational_qualification  }}</p>
                            <p><strong>Special Skills:</strong> {{ $applicant->special_skills  }}</p>
                            <p><strong>Expected Salary:</strong> {{ $applicant->expected_salary  }}</p>

                            <!-- New Questions Section -->
                            <p><strong>Question 1:</strong> {{ $applicant->q1 }}</p>
                            <p><strong>Question 2:</strong> {{ $applicant->q2 }}</p>
                            <p><strong>Question 3:</strong> {{ $applicant->q3 }}</p>
                            <p><strong>Question 4:</strong> {{ $applicant->q4 }}</p>

                            <p><strong>Resume:</strong> <a href="{{ asset('storage/' . $applicant->cv) }}" target="_blank"> Download</a></p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.job.applicants.index') }}" class="btn btn-dark">Back to Job applicants</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
