<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('keys_location', function (Blueprint $table) {
            $table->increments('keys_location_id');
            $table->smallInteger('keys_location_name')->nullable();
            $table->unique('keys_location_name', 'keys_location_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keys_location');
    }
};
