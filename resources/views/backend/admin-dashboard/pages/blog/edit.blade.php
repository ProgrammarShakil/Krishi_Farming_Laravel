@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Edit Blog')

@section('content')

    <div class="">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Content -->
                <div class="container-fluid">
                    <h3 class="mb-4">Edit Blog</h3>
                    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') <!-- Specify the PUT method for updating -->
                        
                        <!-- Blog Title -->
                        <div class="mb-3">
                            <label for="title">Blog Title:</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title', $blog->title) }}" required>
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Blog Description -->
                        <div class="mb-3">
                            <label for="content">Blog Description:</label>
                            <div id="editor-container"></div>
                            <input type="hidden" name="content" id="content-quill" value="{{ old('content', $blog->content) }}">
                            @error('content')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Blog Image -->
                        <div class="mb-3">
                            <label for="image">Blog Image:</label>
                            <input type="file" class="form-control p-1 mb-3" id="image" name="image">
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                            <small>Thumbnail Image:</small>
                            @if ($blog->image)
                                <div class="">
                                    <img class="rounded" src="{{ asset('storage/' . $blog->image) }}" alt="Current Image" style="max-width: 200px;">
                                </div>
                            @endif
                        </div>

                        <button class="mt-3 btn btn-primary" type="submit">Update Blog</button>
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
                        [ { font: [] }, ],
                        [ { header: [1, 2, 3, 4, 5, 6, false] }, ],
                        ["bold", "italic", "underline", "strike"],
                        [ { color: [] }, { background: [] }, ],
                        [ { align: [] }, ],
                        [ { list: "ordered" }, { list: "bullet" }, ],
                        ["link", "image", "video"],
                        ["clean"],
                    ],
                },
            });

            // Set the content of Quill editor to the existing description
            quill.root.innerHTML = $('#content-quill').val();

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
            $('form').on('submit', function(e) {
                updateContent(); // Ensure hidden input has the latest content
            });

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
