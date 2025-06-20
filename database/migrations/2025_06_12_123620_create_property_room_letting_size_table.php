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
        Schema::create('property_room_letting_size', function (Blueprint $table) {
            $table->tinyInteger('property_room_letting_size_id')->primary();
            $table->string('property_room_letting_size_name', 6)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_room_letting_size');
    }
};
