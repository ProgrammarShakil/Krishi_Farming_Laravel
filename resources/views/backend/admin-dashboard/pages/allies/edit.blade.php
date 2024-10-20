@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Edit Ally')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <h3 class="mb-4">Edit Ally</h3>

        <form action="{{ route('admin.allies.update', $ally->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Ally Title -->
            <div class="mb-3">
                <label for="allies_title">Ally Title:</label>
                <input type="text" class="form-control" id="allies_title" name="allies_title"
                    value="{{ old('allies_title', $ally->allies_title) }}" required>
                @error('allies_title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Ally Image -->
            <div class="mb-3">
                <label for="allies_image">Ally Image:</label>
                <input type="file" class="form-control p-1" id="allies_image" name="allies_image">
                @if ($ally->allies_image)
                    <div class="mt-2">
                        <p>Current Image:</p>
                        <img src="{{ asset('storage/' . $ally->allies_image) }}" alt="Ally Image"
                            style="width: 150px; height: auto;">
                    </div>
                @endif
                @error('allies_image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="mt-3 btn btn-primary" type="submit">Update Ally</button>
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
