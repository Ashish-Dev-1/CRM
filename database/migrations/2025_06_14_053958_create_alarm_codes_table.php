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
        Schema::create('alarm_codes', function (Blueprint $table) {
            $table->integer('alarm_code_id')->primary();
            $table->unsignedInteger('alarm_code_property')->nullable();
            $table->string('alarm_code_code', 10)->nullable();
            $table->unsignedTinyInteger('alarm_code_type')->nullable();
            $table->text('alarm_code_notes')->nullable();
            $table->date('alarm_code_date_added')->nullable();
            $table->integer('alarm_code_created_by')->nullable();

             // Foreign keys
            $table->foreign('alarm_code_created_by', 'fk_alarm_code_alarm_code_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('alarm_code_property', 'fk_alarm_code_alarm_code_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('alarm_code_type', 'fk_alarm_code_alarm_code_type')
                ->references('alarm_code_type_id')->on('alarm_code_types')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alarm_codes');
    }
};