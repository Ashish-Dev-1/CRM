<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsInvoicePaymentTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts_invoice_payment', function (Blueprint $table) {
            $table->integer('invoice_payment_id')->primary();
            $table->date('invoice_payment_date')->nullable();
            $table->decimal('invoice_payment_amount', 10, 2)->nullable();
            $table->tinyInteger('invoice_payment_method')->nullable();
            $table->integer('invoice_payment_invoice_id')->nullable();
            $table->text('invoice_payment_notes')->nullable();
            $table->tinyInteger('invoice_payment_type')->nullable();
            $table->integer('invoice_payment_type_id')->nullable();
            $table->tinyInteger('invoice_payment_use_balance')->nullable();
            $table->integer('invoice_payment_tenancy_id')->nullable();
            $table->dateTime('invoice_payment_date_created')->nullable();
            $table->dateTime('invoice_payment_date_updated')->nullable();
            $table->integer('invoice_payment_created_by')->nullable();
            $table->integer('invoice_payment_updated_by')->nullable();

            // Foreign keys
            $table->foreign('invoice_payment_created_by', 'fk_accounts_invoice_payment_invoice_payment_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_payment_invoice_id', 'fk_accounts_invoice_payment_invoice_payment_invoice_id')
                ->references('invoice_id')->on('accounts_invoice')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_payment_method', 'fk_accounts_invoice_payment_invoice_payment_method')
                ->references('payment_method_id')->on('accounts_payment_method')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_payment_tenancy_id', 'fk_accounts_invoice_payment_invoice_payment_tenancy_id')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_payment_type', 'fk_accounts_invoice_payment_invoice_payment_type')
                ->references('accounts_invoice_payment_type_id')->on('accounts_invoice_payment_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_payment_type_id', 'fk_accounts_invoice_payment_invoice_payment_type_id')
                ->references('invoice_credit_id')->on('accounts_invoice_credit')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_payment_updated_by', 'fk_accounts_invoice_payment_invoice_payment_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_invoice_payment');
    }
}