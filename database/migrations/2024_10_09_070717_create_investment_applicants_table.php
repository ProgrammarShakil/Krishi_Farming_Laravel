<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('investment_applicants', function (Blueprint $table) {
            $table->id();
            $table->string('proposer_name'); // Proposer's Name or Organisation
            $table->string('phone_number');  // Phone Number
            $table->string('email');         // Email Address
            $table->string('address')->nullable();  // Address
            $table->decimal('proposal_amount', 10, 2);  // Proposal Amount (currency)
            $table->text('proposal_details');  // Details of the proposal
            $table->json('attachments'); // Type of Attachment (PDF, EXCEL, DOCX, Photo, ZIP)

            $table->foreignId('investment_proposal_id')->constrained()->onDelete('cascade'); // Foreign key to InvestmentProposal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investment_applicants');
    }
};
