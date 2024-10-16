@extends('backend.admin-dashboard.layouts.master')

@section('title', 'Show Investment Proposal')

@section('content')

    <div class="container">
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->

            <div id="content">
                <!-- Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="m-0 font-weight-bold text-primary">Investment Proposal:
                                {{ $applicant->InvestmentProposal->project_name }}</h5>
                                <a href="{{ route('admin.investment.applicants.download', ['id' => $applicant->id]) }}"
                                    class="btn btn-success">
                                    <i class="fas fa-download"></i> Download <i class="fas fa-file-pdf"></i>
                                </a>
                        </div>
                        <div class="card-body">
                            <p><strong>Proposer Name:</strong> {{ $applicant->proposer_name }}</p>
                            <p><strong>Phone Number:</strong> {{ $applicant->phone_number }}</p>
                            <p><strong>Email:</strong> {{ $applicant->email }}</p>
                            <p><strong>Address:</strong> {{ $applicant->address }}</p>
                            <p><strong>Proposal Amount:</strong> {{ $applicant->proposal_amount }}</p>
                            <p><strong>Proposal Details:</strong> {{ $applicant->proposal_details }}</p>

                            @if ($applicant->attachments)
                                @php
                                    $attachments = json_decode($applicant->attachments, true);
                                @endphp
                                <p><strong>Attachments:</strong></p>
                                <ul>
                                    @foreach ($attachments as $attachment)
                                        <li><a href="{{ asset('storage/' . $attachment) }}" target="_blank">View
                                                Attachment</a></li>
                                    @endforeach
                                </ul>
                            @endif

                        </div>
                        <div class="card-footer">
                            <a href="{{ route('admin.investment.proposal.index') }}" class="btn btn-dark">Back to
                                Proposals</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
