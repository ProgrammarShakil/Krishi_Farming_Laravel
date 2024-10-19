@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Edit Portfolio')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Edit Portfolio</h1>

        <!-- Portfolio Edit Form -->
        <form action="{{ route('admin.portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $portfolio->title) }}" required>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Link -->
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" name="link" class="form-control" id="link" value="{{ old('link', $portfolio->link) }}" required>
                @error('link')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image -->
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control-file" id="image" accept="image/*">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Display Existing Image -->
            @if ($portfolio->image)
                <div class="form-group">
                    <label for="current_image">Current Image</label>
                    <div>
                        <img class="main-bg-color rounded" src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}" class="img-thumbnail" style="width: 150px;">
                    </div>
                </div>
            @endif

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update Portfolio</button>
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
