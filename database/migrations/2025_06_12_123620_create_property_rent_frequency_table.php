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
        Schema::create('property_rent_frequency', function (Blueprint $table) {
            $table->integer('property_rent_frequency_id')->default(0)->primary();
            $table->string('property_rent_frequency_name', 50)->nullable();
            $table->tinyInteger('property_rent_frequency_sort')->nullable();
            $table->string('property_rent_frequency_short', 10)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_rent_frequency');
    }
};
