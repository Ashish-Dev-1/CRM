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
        Schema::create('application_tenancy_lengths', function (Blueprint $table) {
            $table->tinyInteger('application_tenancy_length_id')->primary();
            $table->string('application_tenancy_length_name', 25)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_tenancy_lengths');
    }
};
