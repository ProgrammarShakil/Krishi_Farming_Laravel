@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Allies List')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Allies List</h6>
                <div>
                    <a href="{{ route('admin.allies.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Add New Ally
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Ally Title</th>
                                <th>Ally Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allies as $ally)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ally->allies_title }}</td>
                                    <td>
                                        @if ($ally->allies_image)
                                            <img src="{{ asset('storage/' . $ally->allies_image) }}" alt="Ally Image"
                                                style="width: 80px; height: auto;">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <!-- Edit Button -->
                                        <a href="{{ route('admin.allies.edit', $ally->id) }}"
                                            class="btn btn-info btn-sm mx-1"><i class="fas fa-edit"></i></a>

                                        <!-- Delete Form -->
                                        <form action="{{ route('admin.allies.destroy', $ally->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this ally?');">
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

    <script>
        $(document).ready(function() {
            $('.table').DataTable({
                "order": [
                    [1, "asc"]
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
