<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('premium_listing_lettings', function (Blueprint $table) {
            $table->tinyIncrements('premium_listing_id');
            $table->string('premium_listing_name', 100)->nullable();
            $table->tinyInteger('premium_listing_archive')->default(2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('premium_listing_lettings');
    }
};
