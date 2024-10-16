<div style="margin-left: 50px; margin-top: 50px;">
    <div>
        
        <!-- Investment Proposal ID -->
        <div style="margin-bottom: 20px">
            <p style="font-size: 20px"><strong>Investment Proposal Title:</strong> {{ $invest_application->InvestmentProposal->project_name }}</p>
        </div>

        <!-- Proposer Information -->
        <div style="margin-bottom: 20px">
            <strong>Proposer Name:</strong> {{ $invest_application->proposer_name }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Phone Number:</strong> {{ $invest_application->phone_number }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Email:</strong> {{ $invest_application->email }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Address:</strong> {{ $invest_application->address }}
        </div>

        <!-- Proposal Details -->
        <div style="margin-bottom: 20px">
            <strong>Proposal Amount:</strong> {{ $invest_application->proposal_amount }}
        </div>
        <div style="margin-bottom: 20px">
            <strong>Proposal Details:</strong> {{ $invest_application->proposal_details }}
        </div>

        <!-- Attachments -->
        @if ($invest_application->attachments)
        @php
            $attachments = json_decode($invest_application->attachments, true);
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
</div>
