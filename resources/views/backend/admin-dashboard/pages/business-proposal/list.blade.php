@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Business Proposal List')

@section('content')

    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Business Proposal List</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Business Proposals</h6>
                <a href="{{ route('admin.business-proposals.export') }}" class="btn btn-success btn-sm"><i
                        class="fas fa-file-excel"></i> Export to Excel</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Org Name</th>
                                <th>Address</th>
                                <th>Proposal Details</th>
                                <th>Attach Name</th>
                                <th>Attachments</th>
                                <th>Proposal Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($business_proposals as $proposal)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $proposal->owner_name }}</td>
                                    <td>{{ $proposal->phone_number }}</td>
                                    <td>{{ $proposal->email }}</td>
                                    <td>{{ $proposal->organisation_name }}</td>
                                    <td>{{ $proposal->address }}</td>
                                    <td>{{ $proposal->proposal_details }}</td>
                                    <td>{{ $proposal->attachment_name }}</td>
                                    <td>
                                        @php
                                            $attachments = json_decode($proposal->attachments); // Decode the JSON string into an array
                                        @endphp

                                        @if (is_array($attachments) && count($attachments) > 0)
                                            @foreach ($attachments as $index => $attachment)
                                                <!-- Use $index to get the serial number -->
                                                @if (!empty($attachment))
                                                    <!-- Check that attachment is not empty -->
                                                    <a href="{{ asset('storage/' . $attachment) }}"
                                                        target="_blank">Attachment {{ $index + 1 }}</a><br>
                                                    <!-- Display serial number -->
                                                @endif
                                            @endforeach
                                        @else
                                            <span>No attachments</span>
                                        @endif
                                    </td>

                                    <td>{{ $proposal->created_at->format('Y-m-d') }}</td>
                                    <td class="d-flex justify-content-between">
                                        <!-- View Button -->
                                        <a href="{{ route('admin.busines.proposal.show', $proposal->id) }}"
                                            class="btn btn-info btn-sm mx-1"><i class="fas fa-eye"></i></a>

                                        <form action="{{ route('admin.busines.proposal.destroy', $proposal->id) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this proposal?');">
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

    <script>
        $(document).ready(function() {
            $('.table').DataTable({
                "order": [
                    [1, "desc"]
                ],
                "responsive": true,
                "scrollX": true,
                "scrollY": "400px",
                "scrollCollapse": true,
                "paging": true
            });
        });
    </script>
@endsection
