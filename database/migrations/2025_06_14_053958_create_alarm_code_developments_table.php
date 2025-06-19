<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlarmCodeDevelopmentTable extends Migration
{
    public function up(): void
    {
        Schema::create('alarm_code_developments', function (Blueprint $table) {
            $table->integer('alarm_code_id')->primary();
            $table->integer('alarm_code_development')->nullable();
            $table->string('alarm_code_code', 10)->nullable();
            $table->tinyInteger('alarm_code_type')->nullable();
            $table->text('alarm_code_notes')->nullable();
            $table->date('alarm_code_date_added')->nullable();
            $table->integer('alarm_code_created_by')->nullable();

            // Foreign keys
            $table->foreign('alarm_code_created_by', 'fk_alarm_code_development_alarm_code_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('alarm_code_development', 'fk_alarm_code_development_alarm_code_development')
                ->references('development_id')->on('development')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alarm_code_developments');
    }
}