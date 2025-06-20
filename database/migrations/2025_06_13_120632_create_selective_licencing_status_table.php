<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('selective_licencing_status', function (Blueprint $table) {
            $table->tinyInteger('selective_licencing_status_id')->primary();
            $table->string('selective_licencing_status_name', 50)->nullable();
            $table->tinyInteger('selective_licencing_status_sort')->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selective_licencing_status');
    }
};
