@extends('backend.admin-dashboard.layouts.master')

@section('title', 'All Pages')

@section('content')

    <div class="">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->

            <div id="content">
                <!-- Content -->
                <div class="container-fluid">
                    <h3>All Pages</h3>
                    @php
                        $index = 1; // Initialize the index
                    @endphp

                    @foreach ($pages as $page)
                        <div>
                            <p>Page {{ $index++ }}- <a href="{{ route('admin.pages.show', $page->url) }}">{{ $page->title }}</a>
                            </p>
                        </div>
                    @endforeach
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
