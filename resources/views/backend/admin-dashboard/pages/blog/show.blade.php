@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Show blog')

@section('content')

    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Content -->
            <div class="container-fluid">
                <!-- Display the blog details -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Blog Title: {{ $blog->title }}</h6>
                    </div>
                    <div class="card-body">
                        <p><strong>Blog Description:</strong></p>
                        <div>
                            {!! $blog->content !!}
                        </div>
                    </div>
                </div>
                <a href="{{route('admin.blogs.index')}}"><button class="btn btn-primary">Back</button></a>
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
