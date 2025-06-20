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
        Schema::create('applicant_requirement_filter_shareds', function (Blueprint $table) {
            $table->tinyInteger('applicant_requirement_filter_id')->primary();
            $table->string('applicant_requirement_filter_name', 15)->nullable();
            $table->string('applicant_requirement_filter_description', 100)->nullable();
            $table->tinyInteger('applicant_requirement_filter_sort')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_requirement_filter_shareds');
    }
};
