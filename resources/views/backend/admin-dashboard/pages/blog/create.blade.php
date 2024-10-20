@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Create Blog')

@section('content')

    <div class="">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Content -->
                <div class="container-fluid">
                    <h3 class="mb-4">Create Blog</h3>
                    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Ally Title -->
                        <div class="mb-3">
                            <label for="title">Blog Title:</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title') }}" required>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Ally Description -->
                        <div class="mb-3">
                            <label for="description">Blog Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Ally Image -->
                        <div class="mb-3">
                            <label for="image">Blog Image:</label>
                            <input type="file" class="form-control p-1" id="image" name="image" required>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button class="mt-3 btn btn-primary" type="submit">Create Blog</button>
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
