@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Dashboard')

@section('content')

    <div class="">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->

            <div id="content">
                <!-- Content -->
                <div class="container">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h2>Intern Application Details</h2>
                            <a href="{{ route('admin.intern.download', ['id' => $internApplication->id]) }}"
                                class="btn btn-success">
                                <i class="fas fa-download"></i> Download <i class="fas fa-file-pdf"></i>
                            </a>

                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <img src="{{ asset('storage/' . $internApplication->photo) }}" alt="">
                            </div>
                            <div class="mb-3">
                                <strong>Name:</strong> {{ $internApplication->name }}
                            </div>
                            <div class="mb-3">
                                <strong>Email:</strong> {{ $internApplication->email }}
                            </div>
                            <div class="mb-3">
                                <strong>Phone Number:</strong> {{ $internApplication->phone_number }}
                            </div>
                            <div class="mb-3">
                                <strong>Education:</strong> {{ $internApplication->education }}
                            </div>
                            <div class="mb-3">
                                <strong>Skills:</strong> {{ $internApplication->skills }}
                            </div>
                            <div class="mb-3">
                                <strong>Q1:
                                </strong> How can you use your skills to solve problems in agriculture? <br>
                                <span><strong>Ans:</strong>
                                    {{ $internApplication->q1 }}</span>
                            </div>
                            <div class="mb-3">
                                <strong>Q2:</strong> How can you help BDKrishi succeed?<br> <span><strong>Ans:</strong>
                                    {{ $internApplication->q2 }}</span>
                            </div>
                            <div class="mb-3">
                                <strong>Q3:</strong>What are your career goals, and how can BDKrishi help you achieve them?
                                <br>
                                <span><strong>Ans:</strong> {{ $internApplication->q3 }}</span>
                            </div>
                            <div class="mb-3">
                                <strong>Q4:</strong> Tell us about your past projects and their impact.<br>
                                <span><strong>Ans:</strong> {{ $internApplication->q4 }}</span>
                            </div>

                            <div class="mb-3">
                                <strong>Resume:</strong>
                                <a href="{{ asset('storage/' . $internApplication->resume) }}" target="_blank">Download</a>
                            </div>

                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.intern.index') }}" class="btn btn-secondary">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
