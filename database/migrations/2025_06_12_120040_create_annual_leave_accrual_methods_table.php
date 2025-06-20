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
        Schema::create('annual_leave_accrual_methods', function (Blueprint $table) {
            $table->tinyInteger('annual_leave_accrual_method_id')->primary();
            $table->string('annual_leave_accrual_method_name', 50)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annual_leave_accrual_methods');
    }
};