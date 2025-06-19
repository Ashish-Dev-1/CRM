<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsInvoiceCreditLineTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts_invoice_credit_line', function (Blueprint $table) {
            $table->integer('invoice_credit_line_id')->primary();
            $table->integer('invoice_credit_id')->nullable();
            $table->text('invoice_credit_line_description')->nullable();
            $table->decimal('invoice_credit_line_amount', 10, 2)->nullable();
            $table->tinyInteger('invoice_credit_line_vat_rate')->nullable();
            $table->decimal('invoice_credit_line_vat_amount', 10, 2)->nullable();
            $table->smallInteger('invoice_credit_line_nominal_code')->nullable();

              // Foreign keys
            $table->foreign('invoice_credit_id')
                ->references('invoice_credit_id')->on('accounts_invoice_credit')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_credit_line_nominal_code')
                ->references('nominal_code_id')->on('accounts_nominal_code')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_credit_line_vat_rate')
                ->references('vat_rate_id')->on('accounts_vat_rate')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_invoice_credit_line');
    }
}