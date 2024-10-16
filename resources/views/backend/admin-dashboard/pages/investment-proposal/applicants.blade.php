@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Investment Proposal')

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
                            <h6 class="m-0 font-weight-bold text-primary">Investment Applicants List</h6>
                            <div>
                                <a href="{{ route('admin.investment.applicants.export') }}" class="btn btn-success btn-sm"><i
                                        class="fas fa-file-excel"></i> Export to Excel</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL No</th>
                                            <th>Proposer Name</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Proposal Amount</th>
                                            <th>Proposal Details</th>
                                            <th>Attachments</th>
                                            <th>Investment Proposal ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applicants as $proposal)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <!-- Capitalize proposer name -->
                                                <td>{{ ucfirst($proposal->proposer_name) }}</td>

                                                <!-- Format phone number as (xxx) xxx-xxxx -->
                                                <td>{{ $proposal->phone_number }}</td>

                                                <!-- Convert email to lowercase -->
                                                <td>{{ strtolower($proposal->email) }}</td>

                                                <!-- Display address -->
                                                <td>{{ $proposal->address }}</td>

                                                <!-- Format proposal amount as currency -->
                                                <td>{{ number_format($proposal->proposal_amount, 2) }} BDT</td>

                                                <!-- Display proposal details -->
                                                <td>{{ $proposal->proposal_details }}</td>

                                                <!-- Show attachment name and link to view -->
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
                                                        <span>No attachments available.</span>
                                                    @endif
                                                </td>
                                                <!-- Investment Proposal ID -->
                                                <td>{{ $proposal->investment_proposal_id }}</td>

                                                <td class="d-flex justify-content-center">
                                                    {{-- View Button  --}}
                                                    <a href="{{ route('admin.investment.applicants.show', $proposal->id) }}"
                                                        class="btn btn-info btn-sm mx-1"><i class="fas fa-eye"></i></a>

                                                    {{-- Delete Button  --}}
                                                    <form
                                                        action="{{ route('admin.investment-applicants.destroy', $proposal->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE') <!-- This will create a DELETE request -->
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
