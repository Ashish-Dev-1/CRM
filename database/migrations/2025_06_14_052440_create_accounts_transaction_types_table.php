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
        Schema::create('accounts_transaction_types', function (Blueprint $table) {
            $table->tinyInteger('transaction_type_id')->primary();
            $table->string('transaction_type_name', 150)->nullable();
            $table->string('transaction_type_statement_name', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_transaction_types');
    }
};