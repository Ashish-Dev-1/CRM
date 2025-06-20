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
        Schema::create('rent_legal_expenses_insurance_type', function (Blueprint $table) {
            $table->tinyInteger('rleit_id')->primary();
            $table->string('rleit_name', 15)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rent_legal_expenses_insurance_type');
    }
};
