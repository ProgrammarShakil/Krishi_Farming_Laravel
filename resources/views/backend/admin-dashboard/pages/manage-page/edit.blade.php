@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Edit Page')

@section('content')

    <div class="">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->

            <div id="content">
                <!-- Content -->
                <div class="container-fluid">
                    <form action="{{ route('admin.pages.update', $page->url) }}" method="POST" enctype="multipart/form-data" id="page-form">
                        @csrf
                        @method('PUT') <!-- Use PUT method for updates -->

                        <!-- Title Field -->
                        <div class="mb-3">
                            <label for="title">Page Name:</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title', $page->title) }}" required>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- URL Field -->
                        <div class="mb-5">
                            <label for="url">Page URL:</label>
                            <input type="text" class="form-control" id="url" name="url"
                                value="{{ old('url', $page->url) }}" required>
                            @error('url')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Content Field with Quill Editor -->
                        <div id="editor-container">{!! old('content', $page->content) !!}</div>
                        <input type="hidden" name="content" id="content-quill">
                        @error('content')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <button class="mt-3 btn btn-danger btn-sm" type="submit">Update Page</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Toastr Notifications -->
    <script>
        $(document).ready(function() {
            // Initialize Quill Editor
            var quill = new Quill("#editor-container", {
                theme: "snow",
                modules: {
                    toolbar: [
                        [{ font: [] }],
                        [{ header: [1, 2, 3, 4, 5, 6, false] }],
                        ["bold", "italic", "underline", "strike"],
                        [{ color: [] }, { background: [] }],
                        [{ align: [] }],
                        [{ list: "ordered" }, { list: "bullet" }],
                        ["link", "image", "video"],
                        ["clean"]
                    ],
                },
            });

            // Preload the content into Quill editor
            quill.clipboard.dangerouslyPasteHTML(@json(old('content', $page->content)));

            // Function to update hidden input with Quill content
            function updateContent() {
                var content = quill.root.innerHTML;
                $('#content-quill').val(content);
            }

            // Update content on text change
            quill.on('text-change', function() {
                updateContent();
            });

            // Handle form submission
            $('#page-form').on('submit', function(e) {
                updateContent();
            });

            // Toastr notifications for success and error messages
            @if (session('success'))
                toastr.success('{{ session('success') }}', 'Success', {
                    closeButton: true,
                    progressBar: false,
                    timeOut: 5000
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
