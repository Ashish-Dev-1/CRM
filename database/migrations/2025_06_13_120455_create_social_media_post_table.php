<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('social_media_post', function (Blueprint $table) {
            $table->tinyInteger('social_media_post_id')->primary();
            $table->string('social_media_post_name', 50)->nullable();
            $table->tinyInteger('social_media_post_sort')->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_media_post');
    }
};
