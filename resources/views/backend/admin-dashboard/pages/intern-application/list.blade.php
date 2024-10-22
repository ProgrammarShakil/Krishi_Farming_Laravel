@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Intern Application')

@section('content')

    <div class="">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->

            <div id="content">
                <!-- Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    {{-- <h1 class="h3 mb-2 text-gray-800">Intern  List</h1> --}}
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Manage Intern Application List</h6>
                            <div>
                                <a href="{{ route('admin.intern.export') }}" class="btn btn-success btn-sm"><i class="fas fa-file-excel"></i> Export to Excel</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SL No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Education</th>
                                            <th>Skills</th>
                                            {{-- <th>Question 01</th>
                                            <th>Question 02</th>
                                            <th>Question 03</th>
                                            <th>Question 04</th> --}}
                                            <th>Resume</th>
                                            <th>Photo</th>
                                            <th>Actions</th> <!-- Add Actions column -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($internApplications as $application)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $application->name }}</td>
                                            <td>{{ $application->email }}</td>
                                            <td>{{ $application->phone_number }}</td>
                                            <td>{{ $application->education }}</td>
                                            <td>{{ $application->skills }}</td>
                                            {{-- <td>{{ $application->q1 }}</td>
                                            <td>{{ $application->q2 }}</td>
                                            <td>{{ $application->q3 }}</td>
                                            <td>{{ $application->q4 }}</td> --}}
                                            <td><a href="{{ asset('storage/' . $application->resume) }}" target="_blank">View Resume</a></td>
                                            <td><img src="{{ asset('storage/' . $application->photo) }}" alt="Photo" width="50"></td>
                                            <td class="d-flex justify-content-between">
                                                <!-- View Button -->
                                                <a href="{{ route('admin.intern.show', $application->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                                <!-- Add Delete Form -->
                                                <form action="{{ route('admin.intern.destroy', $application->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this application?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i></button>
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
    
    <script>
        $(document).ready(function() {
            $('.table').DataTable({
                "order": [
                    [1, "desc"]
                ],
                "responsive": true,
                "scrollX": true,
                "scrollY": "400px",
                "scrollCollapse": true,
                "paging": true
            });
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
    </script>
@endsection
