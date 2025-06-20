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
        Schema::create('employee_department', function (Blueprint $table) {
            $table->tinyInteger('employee_department_id')->primary();
            $table->string('employee_department_name', 50)->nullable();
            $table->string('employee_department_name2', 75)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_department');
    }
};
