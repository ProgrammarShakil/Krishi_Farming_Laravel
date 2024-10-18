@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Segments')

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
                            <h6 class="m-0 font-weight-bold text-primary">Segment List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Main_Segment Name</th>
                                            <th>Main_Segment Link</th>
                                            <th>Segment_1 Name</th>
                                            <th>Segment_1 Link</th>
                                            <th>Segment_2 Name</th>
                                            <th>Segment_2 Link</th>
                                            <th>Segment_3 Name</th>
                                            <th>Segment_3 Link</th>
                                            <th>Segment_4 Name</th>
                                            <th>Segment_4 Link</th>
                                            <th>Segment_5 Name</th>
                                            <th>Segment_5 Link</th>
                                            <th>Segment_6 Name</th>
                                            <th>Segment_6 Link</th>
                                            <th>Segment_7 Name</th>
                                            <th>Segment_7 Link</th>
                                            <th>Change</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>{{ $segment->main_segment_name }}</td>
                                                <td>{{ $segment->main_segment_link }}</td>
                                                <td>{{ $segment->segment_1_name }}</td>
                                                <td>{{ $segment->segment_1_link }}</td>
                                                <td>{{ $segment->segment_2_name }}</td>
                                                <td>{{ $segment->segment_2_link }}</td>
                                                <td>{{ $segment->segment_3_name }}</td>
                                                <td>{{ $segment->segment_3_link }}</td>
                                                <td>{{ $segment->segment_4_name }}</td>
                                                <td>{{ $segment->segment_4_link }}</td>
                                                <td>{{ $segment->segment_5_name }}</td>
                                                <td>{{ $segment->segment_5_link }}</td>
                                                <td>{{ $segment->segment_6_name }}</td>
                                                <td>{{ $segment->segment_6_link }}</td>
                                                <td>{{ $segment->segment_7_name }}</td>
                                                <td>{{ $segment->segment_7_link }}</td>
                                                <td class="d-flex justify-content-between">

                                                    <a href="{{ route('admin.segments.edit', $segment->id) }}"
                                                       class="btn btn-warning btn-sm mx-1"><i class="fas fa-edit"></i>
                                                    </a>
                                                </td>
                                            </tr>
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

            $('#dataTable').DataTable({
                "order": [
                    [1, "desc"]
                ],
                "responsive": true,
                "scrollY": "400px",
                "scrollX": true,
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
