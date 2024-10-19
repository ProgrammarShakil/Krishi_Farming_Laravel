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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            // Footer Title
            $table->string('footer_title_1');
            $table->string('footer_title_2');
            $table->string('footer_title_3');

            // Footer Title 1
            $table->string('footer_title_1_text_1');
            $table->string('footer_title_1_link_1');
            $table->string('footer_title_1_text_2');
            $table->string('footer_title_1_link_2');
            $table->string('footer_title_1_text_3');
            $table->string('footer_title_1_link_3');
            $table->string('footer_title_1_text_4');
            $table->string('footer_title_1_link_4');
            $table->string('footer_title_1_text_5');
            $table->string('footer_title_1_link_5');

            // Footer Title 2
            $table->string('footer_title_2_text_1');
            $table->string('footer_title_2_link_1');
            $table->string('footer_title_2_text_2');
            $table->string('footer_title_2_link_2');
            $table->string('footer_title_2_text_3');
            $table->string('footer_title_2_link_3');
            $table->string('footer_title_2_text_4');
            $table->string('footer_title_2_link_4');
            $table->string('footer_title_2_text_5');
            $table->string('footer_title_2_link_5');

            // Footer Title 3
            $table->string('footer_title_3_text_1');
            $table->string('footer_title_3_link_1');
            $table->string('footer_title_3_text_2');
            $table->string('footer_title_3_link_2');
            $table->string('footer_title_3_text_3');
            $table->string('footer_title_3_link_3');
            $table->string('footer_title_3_text_4');
            $table->string('footer_title_3_link_4');
            $table->string('footer_title_3_text_5');
            $table->string('footer_title_3_link_5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
