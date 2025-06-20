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
        Schema::create('accounts_nominal_code', function (Blueprint $table) {
            $table->unsignedSmallInteger('nominal_code_id')->default(0)->primary();
            $table->string('nominal_code_name', 40)->nullable();
            $table->tinyInteger('nominal_code_type')->nullable();
            $table->smallInteger('nominal_code_external_id')->nullable();
            $table->unsignedTinyInteger('nominal_code_default_vat_rate')->nullable();
            $table->tinyInteger('nominal_code_archive')->nullable();

            // Foreign keys
            $table->foreign('nominal_code_default_vat_rate', 'fk_accounts_nominal_code_nominal_code_default_vat_rate')
                ->references('vat_rate_id')->on('accounts_vat_rates')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('nominal_code_type', 'fk_accounts_nominal_code_nominal_code_type')
                ->references('nominal_code_type_id')->on('accounts_nominal_code_type')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_nominal_code');
    }
}; 