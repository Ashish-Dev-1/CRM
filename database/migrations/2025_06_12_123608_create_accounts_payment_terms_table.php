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
        Schema::create('accounts_payment_term', function (Blueprint $table) {
            $table->tinyInteger('accounts_payment_term_id')->primary();
            $table->text('accounts_payment_term_description')->nullable();
            $table->tinyInteger('accounts_payment_term_sort')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_payment_term');
    }
};