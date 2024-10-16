@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Show Job Circular')

@section('content')

    <div class="container">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->

            <div id="content">
                <!-- Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary">{{ $circular->position_name }}</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Vacancy:</strong> {{ $circular->vacancy_number }}</p>
                            <p><strong>Location:</strong> {{ $circular->job_location }}</p>
                            <p><strong>Educational Requirements:</strong> {{ $circular->educational_requirements }}</p>
                            <p><strong>Employment Status:</strong> {{ $circular->employment_status }}</p>
                            <p><strong>Workplace:</strong> {{ $circular->workplace }}</p>
                            <p><strong>Additional Requirements:</strong> {{ $circular->additional_requirements }}</p>
                            <p><strong>Responsibilities:</strong> {{ $circular->responsibilities }}</p>
                            <p><strong>Compensation:</strong> {{ $circular->compensation }}</p>
                            <p><strong>Published Date:</strong> {{ $circular->published_date->format('d M, Y') }}</p>
                            <p><strong>Closing Date:</strong> {{ $circular->circular_closing_date->format('d M, Y') }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.job.circular.index') }}" class="btn btn-dark">Back to Job Circulars</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
