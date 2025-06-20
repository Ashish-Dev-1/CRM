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
        Schema::create('accounts_transactions', function (Blueprint $table) {
            $table->integer('transaction_id')->primary();
            $table->smallInteger('transaction_nominal_code')->nullable();
            $table->tinyInteger('transaction_type')->nullable();
            $table->integer('transaction_customer_type')->nullable();
            $table->integer('transaction_customer')->nullable();
            $table->date('transaction_date')->nullable();
            $table->string('transaction_due_date', 10)->nullable();
            $table->text('transaction_reference')->nullable();
            $table->text('transaction_details')->nullable();
            $table->text('transaction_notes')->nullable();
            $table->integer('transaction_property')->nullable();
            $table->integer('transaction_development')->nullable();
            $table->integer('transaction_tenancy')->nullable();
            $table->integer('transaction_branch')->nullable();
            $table->decimal('transaction_debit', 10, 2)->nullable();
            $table->decimal('transaction_credit', 10, 2)->nullable();
            $table->tinyInteger('transaction_status')->default(1);
            $table->dateTime('transaction_date_created')->nullable();
            $table->dateTime('transaction_date_updated')->nullable();
            $table->integer('transaction_created_by')->nullable();
            $table->integer('transaction_updated_by')->nullable();

            // Foreign keys
            $table->foreign('transaction_branch', 'fk_accounts_transaction_transaction_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('transaction_created_by', 'fk_accounts_transaction_transaction_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('transaction_customer_type', 'fk_accounts_transaction_transaction_customer_type')
                ->references('customer_type_id')->on('customer_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('transaction_development', 'fk_accounts_transaction_transaction_development')
                ->references('development_id')->on('development')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('transaction_nominal_code', 'fk_accounts_transaction_transaction_nominal_code')
                ->references('nominal_code_id')->on('accounts_nominal_code')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('transaction_property', 'fk_accounts_transaction_transaction_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('transaction_tenancy', 'fk_accounts_transaction_transaction_tenancy')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('transaction_type', 'fk_accounts_transaction_transaction_type')
                ->references('transaction_type_id')->on('accounts_transaction_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('transaction_updated_by', 'fk_accounts_transaction_transaction_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_transactions');
    }
};