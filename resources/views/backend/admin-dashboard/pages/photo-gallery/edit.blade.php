@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Edit Photo Gallery')

@section('content')

    <div class="">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Content -->
                <div class="container-fluid">
                    <h3 class="mb-4">Edit Photo Gallery</h3>
                    <form action="{{ route('admin.photo_gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Use PUT method for updates -->
                        
                        <!-- Photo Gallery Title -->
                        <div class="mb-3">
                            <label for="title">Photo Gallery Title:</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title', $gallery->title) }}" required>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Photo Gallery Description -->
                        <div class="mb-3">
                            <label for="description">Photo Gallery Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $gallery->description) }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Photo Gallery Image -->
                        <div class="mb-3">
                            <label for="image">Photo Gallery Image:</label>
                            <input type="file" class="form-control p-1" id="image" name="image">
                            <small class="form-text text-muted">Leave blank to keep the current image.</small>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            @if ($gallery->photo)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $gallery->photo) }}" alt="Current Image" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <button class="mt-3 btn btn-primary" type="submit">Update Photo Gallery</button>
                    </form>
                </div>
            </div>
        </div>
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
