@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Video Story List')

@section('content')

    <div class="">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold text-primary">Video Story List</h6>
                            <div>
                                <a href="{{ route('admin.video_story.create') }}" class="btn btn-success btn-sm"><i
                                        class="fas fa-plus mr-1"></i> Add New</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <!-- Added 'w-100' class to ensure full width -->
                                <table class="table table-bordered w-100">
                                    <thead>
                                        <tr>
                                            <th>SL No</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Video</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($videos as $video)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <!-- Display title -->
                                                <td>{{ $video->title }}</td>

                                                <!-- Display description -->
                                                <td>{{ $video->description }}</td>
                                                
                                                <!-- Show Video Iframe -->
                                                <td>
                                                    @if ($video->video)
                                                        @php
                                                            $videoUrl = $video->video;
                                                
                                                            // Check if it's a standard YouTube URL
                                                            if (strpos($videoUrl, 'youtube.com/watch?v=') !== false) {
                                                                $videoId = substr($videoUrl, strpos($videoUrl, 'v=') + 2, 11);
                                                                $embedUrl = "https://www.youtube.com/embed/$videoId";
                                                            }
                                                            // Check if it's a shortened YouTube URL
                                                            elseif (strpos($videoUrl, 'youtu.be/') !== false) {
                                                                $videoId = substr($videoUrl, strrpos($videoUrl, '/') + 1);
                                                                $embedUrl = "https://www.youtube.com/embed/$videoId";
                                                            } else {
                                                                $embedUrl = null;  // If it's not a valid YouTube URL
                                                            }
                                                        @endphp
                                                
                                                        @if ($embedUrl)
                                                            <iframe width="200" height="100" src="{{ $embedUrl }}" allowfullscreen></iframe>
                                                        @else
                                                            <p>Invalid video URL</p>
                                                        @endif
                                                    @else
                                                        N/A
                                                    @endif
                                                </td>

                                                <!-- Action buttons -->
                                                <td class="d-flex justify-content-center">
                                                    {{-- Edit Button  --}}
                                                    <a href="{{ route('admin.video_story.edit', $video->id) }}"
                                                        class="btn btn-warning btn-sm mx-1"><i class="fas fa-edit"></i></a>

                                                    {{-- Delete Button  --}}
                                                    <form action="{{ route('admin.video_story.destroy', $video->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE') <!-- This will create a DELETE request -->
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure you want to delete this Photo?');">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Toastr Notifications -->
    <script>
        $(document).ready(function() {
            $('.table').DataTable({
                "order": [
                    [0, "asc"]
                ],
                "responsive": true,
                "scrollX": true,
                "scrollY": "400px",
                "scrollCollapse": true,
                "paging": true
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
