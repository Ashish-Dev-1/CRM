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
        Schema::create('timescale', function (Blueprint $table) {
            $table->tinyInteger('timescale_id')->primary();
            $table->string('timescale_name', 30)->nullable();
            $table->tinyInteger('timescale_sort')->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timescale');
    }
};
