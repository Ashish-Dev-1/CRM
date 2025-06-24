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
        Schema::create('employee_to_permissions', function (Blueprint $table) {
            $table->integer('employee_to_permissions_id')->primary();
            $table->integer('employee_id')->nullable();
            $table->tinyInteger('employee_permissions_id')->nullable();
             // Foreign keys
            $table->foreign('employee_id', 'fk_employee_to_permissions_employee_id')
                ->references('employee_id')->on('employee')
                ->onUpdate('no action')->onDelete('no action');
            // Foreign key constraint for employee_permissions_id removed due to migration order issue
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_to_permissions');
    }
};
