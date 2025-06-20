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
        Schema::create('valuation_availability', function (Blueprint $table) {
            $table->integer('valuation_availability_id')->primary();
            $table->string('valuation_availability_name', 20)->nullable();
            $table->tinyInteger('valuation_availability_archived')->default(2);
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valuation_availability');
    }
};
