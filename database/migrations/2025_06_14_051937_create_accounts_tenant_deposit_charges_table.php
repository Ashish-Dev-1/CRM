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
        Schema::create('accounts_tenant_deposit_charges', function (Blueprint $table) {
            $table->integer('tenant_deposit_charge_id')->primary();
            $table->string('tenant_deposit_charge_token', 40)->nullable();
            $table->date('tenant_deposit_charge_date')->nullable();
            $table->tinyInteger('tenant_deposit_charge_payment_terms')->nullable();
            $table->date('tenant_deposit_charge_due_date')->nullable();
            $table->decimal('tenant_deposit_charge_amount', 10, 2)->nullable();
            $table->decimal('tenant_deposit_charge_total_amount_paid', 10, 2)->default(0.00);
            $table->integer('tenant_deposit_charge_tenancy_id')->nullable();
            $table->text('tenant_deposit_charge_notes')->nullable();
            $table->integer('tenant_deposit_charge_branch')->nullable();
            $table->dateTime('tenant_deposit_charge_date_created')->nullable();
            $table->dateTime('tenant_deposit_charge_date_updated')->nullable();
            $table->integer('tenant_deposit_charge_created_by')->nullable();
            $table->integer('tenant_deposit_charge_updated_by')->nullable();

             // Foreign keys
            $table->foreign('tenant_deposit_charge_payment_terms', 'fk_acc_ten_dep_cha_ten_dep_cha_pay_ter')
                ->references('accounts_payment_term_id')->on('accounts_payment_term')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_deposit_charge_tenancy_id', 'fk_accounts_tenant_deposit_charge_tenant_deposit_charge')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_deposit_charge_branch', 'fk_accounts_tenant_deposit_charge_tenant_deposit_charge_1')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_deposit_charge_created_by', 'fk_accounts_tenant_deposit_charge_tenant_deposit_charge_2')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_deposit_charge_updated_by', 'fk_accounts_tenant_deposit_charge_tenant_deposit_charge_3')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_tenant_deposit_charges');
    }
};