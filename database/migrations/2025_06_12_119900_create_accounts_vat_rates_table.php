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
        Schema::create('accounts_vat_rates', function (Blueprint $table) {
            $table->unsignedTinyInteger('vat_rate_id')->primary();
            $table->decimal('vat_rate_amount', 4, 2)->nullable();
            $table->string('vat_rate_name', 10)->nullable();
            $table->string('vat_rate_description', 20)->nullable();
            $table->decimal('vat_rate_multiplier', 4, 2)->nullable();
            $table->string('vat_rate_external_id', 100)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_vat_rates');
    }
};