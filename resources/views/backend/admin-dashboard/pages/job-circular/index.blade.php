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
                                <a href="{{ route('admin.job.circular.export') }}" class="btn btn-success btn-sm">
                                    <i class="fas fa-file-excel"></i> Export to Excel
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Position Name</th>
                                            <th>Vacancy Number</th>
                                            <th>Job Location</th>
                                            <th>Educational Requirements</th>
                                            <th>Additional Requirements</th>
                                            <th>Responsibilities</th>
                                            <th>Compensation</th>
                                            <th>Workplace</th>
                                            <th>Employment Status</th>
                                            <th>Gender</th>
                                            <th>Published Date</th>
                                            <th>Closing Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($circulars as $circular)
                                            <tr>
                                                <td>{{ $circular->position_name }}</td>
                                                <td>{{ $circular->vacancy_number }}</td>
                                                <td>{{ $circular->job_location }}</td>
                                                <td>{{ $circular->educational_requirements }}</td>
                                                <td>{{ $circular->additional_requirements }}</td>
                                                <td>{{ $circular->responsibilities }}</td>
                                                <td>{{ $circular->compensation }}</td>
                                                <td>{{ $circular->workplace }}</td>
                                                <td>{{ $circular->employment_status }}</td>
                                                <td>{{ $circular->gender }}</td>
                                                <td>{{ $circular->published_date->format('d-m-Y') }}</td>
                                                <td>{{ $circular->circular_closing_date->format('d-m-Y') }}</td>
                                                <td>
                                                    <a href="{{ route('admin.job.circular.edit', $circular->id) }}"
                                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('admin.job.circular.destroy', $circular->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure you want to delete this job circular?');"><i
                                                                class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="13" class="text-center">No job circulars found.</td>
                                            </tr>
                                        @endforelse
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

           $('#dataTable').DataTable({
            "order": [
                [1, "desc"]
            ],
            "responsive": true,
            "scrollY": "400px",
            "scrollCollapse": true,
            "paging": true
        });
        
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
