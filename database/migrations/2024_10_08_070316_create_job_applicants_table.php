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
        Schema::create('job_applicants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('educational_qualification');
            $table->string('special_skills');
            $table->string('expected_salary');
            $table->text('problem_solving_in_agriculture');
            $table->text('help_bdkrishi_succeed');
            $table->text('career_goals');
            $table->text('past_projects');
            $table->string('cv')->nullable();
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('job_circular_id');
            $table->foreign('job_circular_id')->references('id')->on('job_circulars')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applicants');
    }
};
