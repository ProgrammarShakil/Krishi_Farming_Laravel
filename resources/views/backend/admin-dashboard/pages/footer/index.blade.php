@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Footer Settings')

@section('content')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Footer Settings</h1>

    <!-- Footer Settings Card -->
    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Manage Footer Sections</h6>        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Footer Title 1</th>
                            <th>Footer Title 2</th>
                            <th>Footer Title 3</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($footers as $footer)
                            <tr>
                                <td>{{ $footer->footer_title_1 }}</td>
                                <td>{{ $footer->footer_title_2 }}</td>
                                <td>{{ $footer->footer_title_3 }}</td>
                                <td class="d-flex justify-content-between">
                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.footers.edit', $footer->id) }}" class="btn btn-warning btn-sm mx-1"><i class="fas fa-edit"></i></a>
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
        $('#dataTable').DataTable({
            "order": [[0, "asc"]],
            "responsive": true,
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
