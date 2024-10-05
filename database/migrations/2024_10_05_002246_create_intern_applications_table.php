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
        Schema::create('intern_applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_number')->nullable();
            $table->string('email');
            $table->string('education'); // Added educational qualification
            $table->text('skills'); // Added special skills
            $table->text('interest'); // Added areas of interest
            $table->text('q1'); // Answer to question 1
            $table->text('q2'); // Answer to question 2
            $table->text('q3'); // Answer to question 3
            $table->text('q4'); // Answer to question 4
            $table->string('resume'); // File path to resume
            $table->string('photo');  // File path to photo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intern_applications');
    }
};
