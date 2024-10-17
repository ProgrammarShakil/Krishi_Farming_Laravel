@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Show Business Proposal')

@section('content')

    <div class="container">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->

            <div id="content">
                <!-- Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary">Organisation Name:
                                {{ $proposal->organisation_name }}</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Owner Name:</strong> {{ $proposal->owner_name }}</p>
                            <p><strong>Phone Number:</strong> {{ $proposal->phone_number }}</p>
                            <p><strong>Email:</strong> {{ $proposal->email }}</p>
                            <p><strong>Address:</strong> {{ $proposal->address }}</p>
                            <p><strong>Proposal Details:</strong> {{ $proposal->proposal_details }}</p>

                            <!-- Check if there are any attachments -->
                            @if ($proposal->attachment_name)
                                <p><strong>Attachment Name:</strong> {{ $proposal->attachment_name }}</p>
                            @endif

                            <!-- Display attachments -->

                            @if ($proposal->attachments)
                                @php
                                    $attachments = json_decode($proposal->attachments, true);
                                @endphp
                                <p><strong>Attachments:</strong></p>
                                <ul>
                                    @foreach ($attachments as $attachment)
                                        <li><a href="{{ asset('storage/' . $attachment) }}" target="_blank">View Attachment</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.busines.proposal.index') }}" class="btn btn-dark">Back to Proposals</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
