<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsInvoiceLineTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts_invoice_line', function (Blueprint $table) {
            $table->integer('invoice_line_id')->primary();
            $table->integer('invoice_id')->nullable();
            $table->text('invoice_line_description')->nullable();
            $table->decimal('invoice_line_amount', 10, 2)->nullable();
            $table->tinyInteger('invoice_line_vat_rate')->nullable();
            $table->decimal('invoice_line_vat_amount', 10, 2)->nullable();
            $table->smallInteger('invoice_line_nominal_code')->nullable();
            $table->integer('invoice_line_works_id')->nullable();

             // Foreign keys
            $table->foreign('invoice_id')
                ->references('invoice_id')->on('accounts_invoice')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_line_nominal_code')
                ->references('nominal_code_id')->on('accounts_nominal_code')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_line_vat_rate')
                ->references('vat_rate_id')->on('accounts_vat_rate')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_line_works_id')
                ->references('works_id')->on('works')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_invoice_line');
    }
}