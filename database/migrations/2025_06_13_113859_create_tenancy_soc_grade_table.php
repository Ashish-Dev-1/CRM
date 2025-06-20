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
        Schema::create('tenancy_soc_grade', function (Blueprint $table) {
            $table->tinyInteger('tenancy_soc_grade_id')->primary();
            $table->string('tenancy_soc_grade_name', 25)->nullable();
            $table->text('tenancy_soc_grade_description')->nullable();
            $table->tinyInteger('tenancy_soc_grade_sort')->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenancy_soc_grade');
    }
};
