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
        Schema::create('valuation_condition', function (Blueprint $table) {
            $table->tinyInteger('valuation_condition_id')->primary();
            $table->string('valuation_condition_name', 30)->nullable();
            $table->tinyInteger('valuation_condition_sort')->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valuation_condition');
    }
};
