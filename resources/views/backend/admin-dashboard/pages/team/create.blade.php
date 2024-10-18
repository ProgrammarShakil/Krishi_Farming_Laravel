@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Create Team Member')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Create New Team Member</h1>

        <!-- Team Member Create Form -->
        <form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Name -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Position -->
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" name="position" class="form-control" id="position" value="{{ old('position') }}">
                @error('position')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" rows="4">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image -->
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control-file" id="image">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Facebook Link -->
            <div class="form-group">
                <label for="facebook_link">Facebook Link</label>
                <input type="url" name="facebook_link" class="form-control" id="facebook_link" value="{{ old('facebook_link') }}">
                @error('facebook_link')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- LinkedIn Link -->
            <div class="form-group">
                <label for="linkedin_link">LinkedIn Link</label>
                <input type="url" name="linkedin_link" class="form-control" id="linkedin_link" value="{{ old('linkedin_link') }}">
                @error('linkedin_link')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Twitter Link -->
            <div class="form-group">
                <label for="twitter_link">Twitter Link</label>
                <input type="url" name="twitter_link" class="form-control" id="twitter_link" value="{{ old('twitter_link') }}">
                @error('twitter_link')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Instagram Link -->
            <div class="form-group">
                <label for="instagram_link">Instagram Link</label>
                <input type="url" name="instagram_link" class="form-control" id="instagram_link" value="{{ old('instagram_link') }}">
                @error('instagram_link')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- YouTube Link -->
            <div class="form-group">
                <label for="youtube_link">YouTube Link</label>
                <input type="url" name="youtube_link" class="form-control" id="youtube_link" value="{{ old('youtube_link') }}">
                @error('youtube_link')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Create Team Member</button>
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
