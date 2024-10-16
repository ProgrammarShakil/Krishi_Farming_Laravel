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
                        <div class="card-header">
                            <h2>Intern Application Details</h2>
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
                                <strong>Resume:</strong>
                                <a href="{{ asset('storage/' . $internApplication->resume) }}"
                                    target="_blank">Download</a>
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
