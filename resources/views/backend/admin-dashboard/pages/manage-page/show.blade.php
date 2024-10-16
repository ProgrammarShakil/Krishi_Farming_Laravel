@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Show Page')

@section('content')

    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Content -->
            <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800">Page Details</h1>

                <!-- Display the page details -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Page Name: {{ $page->title }}</h6>
                    </div>
                    <div class="card-body">
                        <p><strong>URL: </strong><a href="{{ url('/pages/' . $page->url) }}"
                                    target="_blank">{{ url('/pages/' . $page->url) }}</a></p>
                        <hr>
                        <p><strong>Content:</strong></p>
                        <div>
                            {!! $page->content !!} <!-- Rendered as HTML -->
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('admin.pages.edit', $page->url) }}" class="btn btn-primary">Edit Page</a>
                        <form action="{{ route('admin.pages.destroy', $page->url) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this page?')">Delete Page</button>
                        </form>
                    </div>
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
