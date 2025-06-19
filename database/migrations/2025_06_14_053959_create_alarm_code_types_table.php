<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlarmCodeTypeTable extends Migration
{
    public function up(): void
    {
        Schema::create('alarm_code_types', function (Blueprint $table) {
            $table->tinyInteger('alarm_code_type_id')->primary();
            $table->string('alarm_code_type_name', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alarm_code_types');
    }
}