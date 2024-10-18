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
        Schema::create('segments', function (Blueprint $table) {
            $table->id();
            $table->string('main_segment_name');
            $table->string('main_segment_link');
            $table->string('segment_1_name');
            $table->string('segment_1_link');
            $table->string('segment_2_name');
            $table->string('segment_2_link');
            $table->string('segment_3_name');
            $table->string('segment_3_link');
            $table->string('segment_4_name');
            $table->string('segment_4_link');
            $table->string('segment_5_name');
            $table->string('segment_5_link');
            $table->string('segment_6_name');
            $table->string('segment_6_link');
            $table->string('segment_7_name');
            $table->string('segment_7_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('segments');
    }
};
