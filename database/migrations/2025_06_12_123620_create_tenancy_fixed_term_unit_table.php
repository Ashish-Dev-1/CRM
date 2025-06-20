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
        Schema::create('tenancy_fixed_term_unit', function (Blueprint $table) {
            $table->tinyInteger('tenancy_fixed_term_unit_id')->primary();
            $table->string('tenancy_fixed_term_unit_name', 10)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenancy_fixed_term_unit');
    }
};
