@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Job Circulars')

@section('content')

<div class="">
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->

        <div id="content">
            <!-- Content -->
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">Job Circular List</h6>
                        <div>
                            <a href="{{ route('admin.job.applicants.export') }}" class="btn btn-success btn-sm"><i class="fas fa-file-excel"></i> Export to Excel</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Educational Qualification</th>
                                        <th>Special Skills</th>
                                        <th>Expected Salary</th>
                                        <th>Question 1</th>
                                        <th>Question 2</th>
                                        <th>Question 3</th>
                                        <th>Question 4</th>
                                        <th>CV</th>
                                        <th>Photo</th>
                                        <th>Job Circular ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($applicants as $applicant)
                                    <tr>
                                        <!-- Capitalize name -->
                                        <td>{{ ucfirst($applicant->name) }}</td>
                            
                                        <!-- Format phone number as (xxx) xxx-xxxx -->
                                        <td>{{ preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "($1) $2-$3", $applicant->phone) }}</td>
                            
                                        <!-- Convert email to lowercase -->
                                        <td>{{ strtolower($applicant->email) }}</td>
                            
                                        <!-- Capitalize each word of educational qualification -->
                                        <td>{{ ucwords($applicant->educational_qualification) }}</td>
                            
                                        <!-- Special skills in italics -->
                                        <td><em>{{ $applicant->special_skills }}</em></td>
                            
                                        <!-- Format salary as currency -->
                                        <td>{{ number_format($applicant->expected_salary, 2) }} BDT</td>
                            
                                        <!-- Display questions -->
                                        <td>{{ $applicant->q1 }}</td>
                                        <td>{{ $applicant->q2 }}</td>
                                        <td>{{ $applicant->q3 }}</td>
                                        <td>{{ $applicant->q4 }}</td>
                            
                                        <td><a href="{{ asset('storage/' . $applicant->cv) }}" target="_blank">View Resume</a></td>
                                        <td><img src="{{ asset('storage/' . $applicant->photo) }}" alt="Photo" width="50"></td>
                                        <!-- Job Circular ID -->
                                        <td>{{ $applicant->job_circular_id }}</td>
                                        <td>
                                            <form action="{{ route('admin.job-applicants.destroy', $applicant->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE') <!-- This will create a DELETE request -->
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this applicant?');">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    <!-- Toastr Notifications -->
    <script>
        $(document).ready(function() {
            $('.table').DataTable();
            
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
