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
        Schema::create('tenancy_inspection_status', function (Blueprint $table) {
            $table->tinyInteger('tenancy_inspection_status_id')->primary();
            $table->string('tenancy_inspection_status_name', 50)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenancy_inspection_status');
    }
};
