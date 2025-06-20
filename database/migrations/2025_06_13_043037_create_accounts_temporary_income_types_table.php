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
        Schema::create('accounts_temporary_income_type', function (Blueprint $table) {
            $table->tinyInteger('temporary_income_type_id')->primary();
            $table->string('temporary_income_type_name', 50)->nullable();
            $table->tinyInteger('temporary_income_type_sort')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_temporary_income_type');
    }
};