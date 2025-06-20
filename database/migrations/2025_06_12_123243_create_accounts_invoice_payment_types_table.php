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
        Schema::create('accounts_invoice_payment_type', function (Blueprint $table) {
            $table->tinyInteger('accounts_invoice_payment_type_id')->primary();
            $table->string('accounts_invoice_payment_type_name', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_invoice_payment_type');
    }
};