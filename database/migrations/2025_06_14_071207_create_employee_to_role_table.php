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
        Schema::create('employee_to_role', function (Blueprint $table) {
            $table->integer('employee_to_role_id')->primary();
            $table->integer('employee_id')->nullable();
            $table->integer('employee_role_id')->nullable();
            // Foreign keys
            $table->foreign('employee_id', 'fk_employee_to_role_employee')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            // The following foreign key references employee_id again, which may be a mistake in your SQL.
            // If you want to keep it, uncomment the next lines:
            // // Foreign key constraint for employee_role_id removed due to migration order issue
            // Foreign key constraint for employee_role_id removed due to migration order issue
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_to_role');
    }
};
