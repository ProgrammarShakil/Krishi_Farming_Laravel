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
                        <!-- Blog Title -->
                        <div class="mb-3">
                            <label for="title">Blog Title:</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title') }}" required>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Blog Description -->
                        <div class="mb-3">
                            <label for="content">Blog Description:</label>
                            <div id="editor-container"></div>
                        <input type="hidden" name="content" id="content-quill">
                            @error('content')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

       

                        <!-- Blog Image -->
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

    <script>
        // CUSTOMIZING QUILL EDITOR
        $(document).ready(function() {
            var quill = new Quill("#editor-container", {
                theme: "snow",
                modules: {
                    toolbar: [
                        // Font options
                        [{
                            font: [],
                        }, ],

                        // Header options (h1 to h6)
                        [{
                            header: [1, 2, 3, 4, 5, 6, false],
                        }, ],

                        // Formatting options
                        ["bold", "italic", "underline", "strike"], // Toggle buttons

                        // Color and Background options
                        [{
                                color: [],
                            },
                            {
                                background: [],
                            },
                        ],

                        // Text alignment options
                        [{
                            align: [],
                        }, ],

                        // List and indent options
                        [{
                                list: "ordered",
                            },
                            {
                                list: "bullet",
                            },
                        ],

                        // Add link, image, video, and formula
                        ["link", "image", "video"],

                        // Remove formatting button
                        ["clean"],
                    ],
                },
            });

            // Function to update hidden input with Quill content
            function updateContent() {
                var content = quill.root.innerHTML; // Get editor content
                $('#content-quill').val(content); // Set hidden input value
            }

            // Update content on text change
            quill.on('text-change', function() {
                updateContent();
            });

            // Handle form submission
            $('#page-form').on('submit', function(e) {
                updateContent(); // Ensure hidden input has the latest content
                // console.log('Title:', $('#title').val()); // Log the title value
                // console.log('Content:', $('#content-quill').val()); // Log the content value
            });



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
