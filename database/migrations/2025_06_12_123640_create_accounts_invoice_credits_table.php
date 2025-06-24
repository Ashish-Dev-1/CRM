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
        Schema::create('accounts_invoice_credit', function (Blueprint $table) {
            $table->integer('invoice_credit_id')->primary();
            $table->string('invoice_credit_token', 40)->nullable();
            $table->unsignedTinyInteger('invoice_credit_customer_type')->nullable();
            $table->integer('invoice_credit_customer')->nullable();
            $table->date('invoice_credit_date')->nullable();
            $table->unsignedInteger('invoice_credit_property_id')->nullable();
            $table->integer('invoice_credit_development_id')->nullable();
            $table->integer('invoice_credit_tenancy_id')->nullable();
            $table->integer('invoice_credit_branch')->nullable();
            $table->text('invoice_credit_notes')->nullable();
            $table->decimal('invoice_credit_total_amount_exc_vat', 10, 2)->nullable();
            $table->decimal('invoice_credit_total_vat_amount', 10, 2)->nullable();
            $table->tinyInteger('invoice_credit_posted')->default(0);
            $table->integer('invoice_credit_invoice_id')->nullable();
            $table->dateTime('invoice_credit_date_created')->nullable();
            $table->dateTime('invoice_credit_date_updated')->nullable();
            $table->dateTime('invoice_credit_date_posted')->nullable();
            $table->integer('invoice_credit_created_by')->nullable();
            $table->integer('invoice_credit_updated_by')->nullable();
            $table->integer('invoice_credit_posted_by')->nullable();

             // Foreign keys
            $table->foreign('invoice_credit_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_credit_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_credit_customer_type')
                ->references('customer_type_id')->on('customer_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_credit_development_id')
                ->references('development_id')->on('development')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_credit_invoice_id')
                ->references('invoice_id')->on('accounts_invoice')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_credit_posted_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_credit_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_credit_tenancy_id')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_credit_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_invoice_credit');
    }
};