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
        Schema::create('employee_to_department', function (Blueprint $table) {
            $table->integer('employee_to_department_id')->primary();
            $table->integer('employee_id')->nullable();
            $table->tinyInteger('employee_department_id')->nullable();
             // Foreign keys
            $table->foreign('employee_id', 'fk_employee_to_department_employee_id')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('employee_department_id', 'fk_employee_to_department_employee_department_id')
                ->references('employee_department_id')->on('employee_department')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_to_department');
    }
};
