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
        Schema::create('job_circulars', function (Blueprint $table) {
            $table->id();
            $table->string('position_name');
            $table->integer('vacancy_number');
            $table->string('job_location');
            $table->text('educational_requirements');
            $table->text('additional_requirements');
            $table->text('responsibilities');
            $table->string('compensation');
            $table->string('workplace');
            $table->string('employment_status');
            $table->string('gender')->nullable(); // Optional
            $table->date('published_date');
            $table->date('circular_closing_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_circulars');
    }
};
