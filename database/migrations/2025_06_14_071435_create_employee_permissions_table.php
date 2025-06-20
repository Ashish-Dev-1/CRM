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
        Schema::create('employee_permissions', function (Blueprint $table) {
            $table->tinyInteger('employee_permissions_id')->primary();
            $table->string('employee_permissions_name', 150)->nullable();
            $table->tinyInteger('employee_permissions_category')->nullable();
             $table->foreign('employee_permissions_category', 'fk_employee_permissions_employee_permissions_category')
                ->references('employee_permissions_category_id')->on('employee_permissions_category')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_permissions');
    }
};
