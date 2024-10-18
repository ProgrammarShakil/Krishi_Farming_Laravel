@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Edit Team Member')

@section('content')

    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Edit Team Member</h1>

        <!-- Team Member Edit Form -->
        <form action="{{ route('admin.teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $team->name) }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Position -->
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" name="position" class="form-control" id="position" value="{{ old('position', $team->position) }}">
                @error('position')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="description" rows="4">{{ old('description', $team->description) }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image -->
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image">
                @if ($team->image)
                    <small><img class="mt-3" src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}" style="width: 100px; height: auto;"></small>
                @else
                    <small>No current image.</small>
                @endif
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Social Media Links -->
            <div class="form-group">
                <label for="facebook_link">Facebook Link</label>
                <input type="url" name="facebook_link" class="form-control" id="facebook_link" value="{{ old('facebook_link', $team->facebook_link) }}">
            </div>

            <div class="form-group">
                <label for="linkedin_link">LinkedIn Link</label>
                <input type="url" name="linkedin_link" class="form-control" id="linkedin_link" value="{{ old('linkedin_link', $team->linkedin_link) }}">
            </div>

            <div class="form-group">
                <label for="twitter_link">Twitter Link</label>
                <input type="url" name="twitter_link" class="form-control" id="twitter_link" value="{{ old('twitter_link', $team->twitter_link) }}">
            </div>

            <div class="form-group">
                <label for="instagram_link">Instagram Link</label>
                <input type="url" name="instagram_link" class="form-control" id="instagram_link" value="{{ old('instagram_link', $team->instagram_link) }}">
            </div>

            <div class="form-group">
                <label for="youtube_link">YouTube Link</label>
                <input type="url" name="youtube_link" class="form-control" id="youtube_link" value="{{ old('youtube_link', $team->youtube_link) }}">
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <script>
        // Toastr Notifications 
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
