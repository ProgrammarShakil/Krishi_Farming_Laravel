@extends('frontend.layouts.master')

@section('title', 'Intern Apply')

@section('content')
    <div class="py-10 px-5">
        <div class="mt-10 mb-5 mx-auto rounded-lg p-8">
            <h1 class="text-4xl font-bold text-gray-700 mb-8 text-center">Job Applications</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 text-white">
                @forelse ($circulars as $circular)
                    <div class="main-bg-color shadow-md rounded-lg p-4">
                        <h3 class="text-lg font-semibold">{{ $circular->position_name }}</h3>
                        <p class="mt-2"><span>Vacancy Number:</span> {{ $circular->vacancy_number }}</p>
                        <p class="py-1"><span>Job Location:</span> {{ $circular->job_location }}</p>
                        <p class="py-1"><span>Published Date:</span> {{ $circular->published_date->format('d-m-Y') }}</p>
                        <p class="py-1"><span>Closing Date:</span> {{ $circular->circular_closing_date->format('d-m-Y') }}</p>
                        <p class="py-1"><span>Educational Requirements:</span> {{ $circular->educational_requirements }}</p>
                        <p class="py-1"><span>Additional Requirements:</span> {{ $circular->additional_requirements }}</p>
                        <p class="py-1"><span>Responsibilities:</span> {{ $circular->responsibilities }}</p>
                        <p class="py-1"><span>Compensation:</span> {{ $circular->compensation }}</p>
                        <p class="py-1"><span>Workplace:</span> {{ $circular->workplace }}</p>
                        <p class="py-1"><span>Employment Status:</span> {{ $circular->employment_status }}</p>
                        <p class="py-1"><span>Gender:</span> {{ $circular->gender }}</p>
            
                        <!-- Apply Now Button (Link to new application form) -->
                        <a href="{{ route('frontend.pages.job.applicants.create', ['id' => $circular->id]) }}" class="mt-4 inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Apply Now
                        </a>
                    </div>
                @empty
                    <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-center">
                        <p class="text-gray-500">No job circulars found.</p>
                    </div>
                @endforelse
            </div>
            
            
            
        </div>
    </div>

    <script>
        $(document).ready(function() {
            @if (session('success'))
                toastr.success('{{ session('success') }}', 'Success', {
                    closeButton: true,
                    progressBar: true,
                    timeOut: 5000 // 5 seconds timeout
                });
            @endif

            @if (session('error'))
                toastr.error('{{ session('error') }}', 'Error', {
                    closeButton: true,
                    progressBar: true,
                    timeOut: 5000
                });
            @endif
        });
    </script>
@endsection
