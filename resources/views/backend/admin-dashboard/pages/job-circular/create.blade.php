@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Create Job Circular')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Create New Job Circular</h1>

        <!-- Job Circular Create Form -->
        <form action="{{ route('admin.job.circular.store') }}" method="POST">
            @csrf
            <!-- Position Name -->
            <div class="form-group">
                <label for="position_name">Position Name</label>
                <input type="text" name="position_name" class="form-control" id="position_name"
                    value="{{ old('position_name') }}" required>
                @error('position_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Vacancy Number -->
            <div class="form-group">
                <label for="vacancy_number">Vacancy Number</label>
                <input type="number" name="vacancy_number" class="form-control" id="vacancy_number"
                    value="{{ old('vacancy_number') }}" required>
                @error('vacancy_number')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Job Location -->
            <div class="form-group">
                <label for="job_location">Job Location</label>
                <input type="text" name="job_location" class="form-control" id="job_location"
                    value="{{ old('job_location') }}" required>
                @error('job_location')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Educational Requirements -->
            <div class="form-group">
                <label for="educational_requirements">Educational Requirements</label>
                <textarea name="educational_requirements" class="form-control" id="educational_requirements" rows="4" required>{{ old('educational_requirements') }}</textarea>
                @error('educational_requirements')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Additional Requirements -->
            <div class="form-group">
                <label for="additional_requirements">Additional Requirements</label>
                <textarea name="additional_requirements" class="form-control" id="additional_requirements" rows="4" required>{{ old('additional_requirements') }}</textarea>
                @error('additional_requirements')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Responsibilities and Job Context -->
            <div class="form-group">
                <label for="responsibilities">Responsibilities and Job Context</label>
                <textarea name="responsibilities" class="form-control" id="responsibilities" rows="4" required>{{ old('responsibilities') }}</textarea>
                @error('responsibilities')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Compensation and Other Benefits -->
            <div class="form-group">
                <label for="compensation">Compensation and Other Benefits</label>
                <input type="text" name="compensation" class="form-control" id="compensation"
                    value="{{ old('compensation') }}" required>
                @error('compensation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Workplace -->
            <div class="form-group">
                <label for="workplace">Workplace</label>
                <input type="text" name="workplace" class="form-control" id="workplace" value="{{ old('workplace') }}"
                    required>
                @error('workplace')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Employment Status (Dropdown) -->
            <div class="form-group">
                <label for="employment_status">Employment Status</label>
                <select name="employment_status" class="form-control" id="employment_status" required>
                    <option value="">Select Employment Status</option>
                    <option value="Full-time" {{ old('employment_status') == 'Full-time' ? 'selected' : '' }}>Full-time
                    </option>
                    <option value="Part-time" {{ old('employment_status') == 'Part-time' ? 'selected' : '' }}>Part-time
                    </option>
                    <option value="Contract" {{ old('employment_status') == 'Contract' ? 'selected' : '' }}>Contract
                    </option>
                    <option value="Internship" {{ old('employment_status') == 'Internship' ? 'selected' : '' }}>Internship
                    </option>
                </select>
                @error('employment_status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Gender (Dropdown) -->
            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" class="form-control" id="gender">
                    <option value="">Select Gender</option>
                    <option value="Any" {{ old('gender') == 'Any' ? 'selected' : '' }}>Any</option>
                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Published Date -->
            <div class="form-group">
                <label for="published_date">Published Date</label>
                <input type="date" name="published_date" class="form-control" id="published_date"
                    value="{{ old('published_date') }}" required>
                @error('published_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Circular Closing Date -->
            <div class="form-group">
                <label for="circular_closing_date">Circular Closing Date</label>
                <input type="date" name="circular_closing_date" class="form-control" id="circular_closing_date"
                    value="{{ old('circular_closing_date') }}" required>
                @error('circular_closing_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Create Job Circular</button>
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
