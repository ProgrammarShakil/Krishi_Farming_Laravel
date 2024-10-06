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
        Schema::create('brand_franchise_proposals', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('organisation_name');
            $table->text('address');
            $table->text('proposal_details');
            $table->string('attachment_name');
            $table->text('attachments')->nullable(); // JSON field to store uploaded file paths
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_franchise_proposals');
    }
};
