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
        Schema::create('accounts_invoice_recurring', function (Blueprint $table) {
            $table->integer('invoice_recurring_id')->primary();
            $table->integer('invoice_recurring_invoice_id')->nullable();
            $table->smallInteger('invoice_recurring_frequency')->nullable();
            $table->tinyInteger('invoice_recurring_frequency_unit')->nullable();
            $table->date('invoice_recurring_start_date')->nullable();
            $table->date('invoice_recurring_next_processing_date')->nullable();
            $table->tinyInteger('invoice_recurring_suspended')->nullable();

             // Foreign keys
            $table->foreign('invoice_recurring_frequency_unit', 'fk_accounts_invoice_recurring_invoice_recurring_frequency_unit')
                ->references('recurring_frequency_unit_id')->on('accounts_recurring_frequency_unit')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_recurring_invoice_id', 'fk_accounts_invoice_recurring_invoice_recurring_invoice')
                ->references('invoice_id')->on('accounts_invoice')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_invoice_recurring');
    }
};