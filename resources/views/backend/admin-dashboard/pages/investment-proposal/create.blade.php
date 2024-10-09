@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Create Investment Proposal')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Create Investment Proposal</h1>

        <!-- Investment Proposal Create Form -->
        <form action="{{ route('admin.investment.proposal.store') }}" method="POST">
            @csrf

            <!-- Project Name -->
            <div class="form-group">
                <label for="project_name">Project Name</label>
                <input type="text" name="project_name" class="form-control" id="project_name"
                    value="{{ old('project_name') }}" required>
                @error('project_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Project Details -->
            <div class="form-group">
                <label for="project_details">Project Details</label>
                <textarea name="project_details" class="form-control" id="project_details" rows="4" required>{{ old('project_details') }}</textarea>
                @error('project_details')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- YouTube Video URL -->
            <div class="form-group">
                <label for="video">YouTube Video URL (Optional)</label>
                <input type="url" name="video" class="form-control" id="video" placeholder="Enter YouTube video URL" value="{{ old('video') }}">
                @error('video')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Other fields (Position Name, Vacancy Number, etc.) -->
            <!-- Keep the rest of the form fields unchanged -->

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Create Investment Proposal</button>
        </form>
    </div>

    <!-- Toastr Notifications -->
    <script>
        $(document).ready(function() {
            @if (session('success'))
                toastr.success('{{ session('success') }}', 'Success', {
                    closeButton: true,
                    progressBar: false,
                    timeOut: 5000 // 5 seconds timeout
                });
            @endif

            @if (session('error'))
                toastr.error('{{ session('error') }}', 'Error', {
                    closeButton: true,
                    progressBar: false,
                    timeOut: 5000
                });
            @endif
        });
    </script>
@endsection
