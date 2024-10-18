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
        Schema::table('teams', function (Blueprint $table) {
            $table->string('facebook_link')->nullable()->after('image');
            $table->string('linkedin_link')->nullable()->after('facebook_link');
            $table->string('twitter_link')->nullable()->after('linkedin_link');
            $table->string('instagram_link')->nullable()->after('twitter_link');
            $table->string('youtube_link')->nullable()->after('instagram_link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn('facebook_link');
            $table->dropColumn('linkedin_link');
            $table->dropColumn('twitter_link');
            $table->dropColumn('instagram_link');
            $table->dropColumn('youtube_link');
        });
    }
};
