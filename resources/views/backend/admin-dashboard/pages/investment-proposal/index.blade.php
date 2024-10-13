@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Investment Proposals')

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
                            <h6 class="font-weight-bold text-primary">Investment Proposal List</h6>
                            <div>
                                <a href="{{ route('admin.investment.proposal.export') }}" class="btn btn-success btn-sm"><i class="fas fa-file-excel"></i> Export to Excel</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Project Name</th>
                                            <th>Project Details</th>
                                            <th>Video</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($proposals as $proposal)
                                            <tr>
                                                <td>{{ $proposal->project_name }}</td>
                                                <td>{{ $proposal->project_details }}</td>
                                                <td>
                                                    @if ($proposal->video)
                                                        @php
                                                            $videoUrl = $proposal->video;
                                                
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
                                                
                                                <td>
                                                    <a href="{{ route('admin.investment.proposal.edit', $proposal->id) }}"
                                                        class="btn btn-warning btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form
                                                        action="{{ route('admin.investment.proposal.destroy', $proposal->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure you want to delete this investment proposal?');">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="text-center">No investment proposals found.</td>
                                            </tr>
                                        @endforelse
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
                    [1, "desc"]
                ],
                "responsive": true,
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
