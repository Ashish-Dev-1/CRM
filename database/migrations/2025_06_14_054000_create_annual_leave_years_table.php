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
        Schema::create('annual_leave_years', function (Blueprint $table) {
            $table->year('annual_leave_years_year')->primary();
            $table->tinyInteger('annual_leave_years_statutory_entitlement_days')->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annual_leave_years');
    }
};