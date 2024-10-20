@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Photo Gallery List')

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
                            <h6 class="m-0 font-weight-bold text-primary">Photo Gallery List</h6>
                            <div>
                                <a href="{{ route('admin.photo_gallery.create') }}" class="btn btn-success btn-sm"><i
                                        class="fas fa-plus mr-1"></i> Add New</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- Added 'w-100' class to ensure full width -->
                                <table class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>SL No</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($galleries as $gallery)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <!-- Display title -->
                                                <td>{{ $gallery->title }}</td>

                                                <!-- Display description -->
                                                <td>{{ $gallery->description }}</td>

                                                <!-- Show image if available -->
                                                <td>
                                                    @if ($gallery->photo)
                                                        <img class="rounded"
                                                            src="{{ asset('storage/' . $gallery->photo) }}"
                                                            alt="{{ $gallery->title }}" class="img-thumbnail"
                                                            style="width: 100px;">
                                                    @else
                                                        <span>No image available.</span>
                                                    @endif
                                                </td>

                                                <!-- Action buttons -->
                                                <td class="d-flex justify-content-center">
                                                    {{-- Edit Button  --}}
                                                    <a href="{{ route('admin.photo_gallery.edit', $gallery->id) }}"
                                                        class="btn btn-warning btn-sm mx-1"><i class="fas fa-edit"></i></a>

                                                    {{-- Delete Button  --}}
                                                    <form action="{{ route('admin.photo_gallery.destroy', $gallery->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE') <!-- This will create a DELETE request -->
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure you want to delete this Photo?');">
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
            $('.table').DataTable({
                "order": [
                    [0, "asc"]
                ],
                "responsive": true,
                "scrollX": true,
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
