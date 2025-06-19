<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('rent_legal_expenses_insurance_status', function (Blueprint $table) {
            $table->tinyInteger('rleis_id')->primary();
            $table->string('rleis_name', 75)->nullable();
            $table->tinyInteger('rleis_sort');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rent_legal_expenses_insurance_status');
    }
};
