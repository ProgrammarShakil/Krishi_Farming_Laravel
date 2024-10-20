@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Edit Video Story')

@section('content')

    <div class="">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Content -->
                <div class="container-fluid">
                    <h3 class="mb-4">Edit Video Story</h3>
                    <form action="{{ route('admin.video_story.update', $video->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Use PUT method for updates -->
                        
                        <!-- Video Story Title -->
                        <div class="mb-3">
                            <label for="title">Video Story Title:</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title', $video->title) }}" required>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Video Story Description -->
                        <div class="mb-3">
                            <label for="description">Video Story Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $video->description) }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                         <!-- Video Story Title -->
                         <div class="mb-3">
                            <label for="video">Video URL:</label>
                            <input type="text" class="form-control" id="video" name="video"
                                value="{{ old('video', $video->video) }}" required>
                            @error('video')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button class="mt-3 btn btn-primary" type="submit">Update Video Story</button>
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
