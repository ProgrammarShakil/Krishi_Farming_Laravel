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
        Schema::create('business_proposals', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('organisation_name');
            $table->string('address');
            $table->text('proposal_details');
            $table->string('attachment_name');
            $table->json('attachments'); // Store attachments as JSON
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_proposals');
    }
};
