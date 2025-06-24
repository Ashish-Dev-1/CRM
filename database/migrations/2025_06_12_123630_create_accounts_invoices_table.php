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
        Schema::create('accounts_invoice', function (Blueprint $table) {
            $table->integer('invoice_id')->primary();
            $table->string('invoice_token', 40)->nullable();
            $table->unsignedTinyInteger('invoice_customer_type')->nullable();
            $table->integer('invoice_customer')->nullable();
            $table->date('invoice_date')->nullable();
            $table->date('invoice_due_date')->nullable();
            $table->unsignedInteger('invoice_property_id')->nullable();
            $table->integer('invoice_development_id')->nullable();
            $table->integer('invoice_tenancy_id')->nullable();
            $table->integer('invoice_branch')->nullable();
            $table->tinyInteger('invoice_payment_terms')->nullable();
            $table->text('invoice_notes')->nullable();
            $table->decimal('invoice_total_amount_exc_vat', 10, 2)->nullable();
            $table->decimal('invoice_total_vat_amount', 10, 2)->nullable();
            $table->decimal('invoice_total_amount_paid', 10, 2)->default(0.00);
            $table->tinyInteger('invoice_posted')->default(0);
            $table->tinyInteger('invoice_overdue_reminders')->default(1);
            $table->dateTime('invoice_date_created')->nullable();
            $table->dateTime('invoice_date_updated')->nullable();
            $table->dateTime('invoice_date_posted')->nullable();
            $table->integer('invoice_created_by')->nullable();
            $table->integer('invoice_updated_by')->nullable();
            $table->integer('invoice_posted_by')->nullable();

            // Foreign keys
            $table->foreign('invoice_customer_type')
                ->references('customer_type_id')->on('customer_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_development_id')
                ->references('development_id')->on('development')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_tenancy_id')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_payment_terms')
                ->references('accounts_payment_term_id')->on('accounts_payment_term')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('invoice_posted_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_invoice');
    }
};