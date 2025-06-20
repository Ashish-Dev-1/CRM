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
        Schema::create('applicant_chain_status', function (Blueprint $table) {
            $table->tinyInteger('applicant_chain_status_id')->primary();
            $table->string('applicant_chain_status_name', 100)->nullable();
            $table->tinyInteger('applicant_chain_status_sort')->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_chain_status');
    }
};