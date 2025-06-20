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
        Schema::create('employee_mileage', function (Blueprint $table) {
            $table->integer('employee_mileage_id')->primary();
            $table->integer('employee_mileage_employee_id')->nullable();
            $table->smallInteger('employee_mileage_vehicle_id')->nullable();
            $table->date('employee_mileage_journey_date')->nullable();
            $table->string('employee_mileage_start_postcode', 8)->nullable();
            $table->string('employee_mileage_end_postcode', 8)->nullable();
            $table->decimal('employee_mileage_mileage', 6, 2)->nullable();
            $table->string('employee_mileage_notes', 255)->nullable();
            $table->dateTime('employee_mileage_date_created')->nullable();
            $table->integer('employee_mileage_created_by')->nullable();
            // Foreign keys
            $table->foreign('employee_mileage_created_by', 'fk_employee_mileage_employee_mileage_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('employee_mileage_employee_id', 'fk_employee_mileage_employee_mileage_employee_id')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('employee_mileage_vehicle_id', 'fk_employee_mileage_employee_mileage_vehicle_id')
                ->references('vehicle_id')->on('vehicle')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_mileage');
    }
};
