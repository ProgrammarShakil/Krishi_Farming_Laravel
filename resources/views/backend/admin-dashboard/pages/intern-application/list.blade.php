@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Dashboard')

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
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Manage Intern Application List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Education</th>
                                            <th>Skills</th>
                                            <th>Resume</th>
                                            <th>Photo</th>
                                            <th>Actions</th> <!-- Add Actions column -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($internApplications as $application)
                                        <tr>
                                            <td>{{ $application->name }}</td>
                                            <td>{{ $application->email }}</td>
                                            <td>{{ $application->phone_number }}</td>
                                            <td>{{ $application->education }}</td>
                                            <td>{{ $application->skills }}</td>
                                            <td><a href="{{ asset('storage/' . $application->resume) }}" target="_blank">View Resume</a></td>
                                            <td><img src="{{ asset('storage/' . $application->photo) }}" alt="Photo" width="50"></td>
                                            <td>
                                                <!-- Add Delete Form -->
                                                <form action="{{ route('admin.intern.destroy', $application->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this application?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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

@endsection
