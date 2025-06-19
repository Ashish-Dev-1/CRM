<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('valuation_appointment_type', function (Blueprint $table) {
            $table->tinyInteger('valuation_appointment_type_id')->primary();
            $table->string('valuation_appointment_type_name', 50)->nullable();
            $table->string('valuation_appointment_type_subject', 100)->nullable();
            $table->tinyInteger('valuation_appointment_type_sort')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('valuation_appointment_type');
    }
};
