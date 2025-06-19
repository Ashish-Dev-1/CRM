<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnualLeaveYearsTable extends Migration
{
    public function up(): void
    {
        Schema::create('annual_leave_years', function (Blueprint $table) {
            $table->year('annual_leave_years_year')->primary();
            $table->tinyInteger('annual_leave_years_statutory_entitlement_days')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('annual_leave_years');
    }
}