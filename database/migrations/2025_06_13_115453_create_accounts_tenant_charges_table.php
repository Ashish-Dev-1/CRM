<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTenantChargeTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts_tenant_charge', function (Blueprint $table) {
            $table->integer('tenant_charge_id')->primary();
            $table->string('tenant_charge_token', 40)->nullable();
            $table->date('tenant_charge_date')->nullable();
            $table->tinyInteger('tenant_charge_payment_terms')->nullable();
            $table->date('tenant_charge_due_date')->nullable();
            $table->integer('tenant_charge_tenancy_id')->nullable();
            $table->text('tenant_charge_notes')->nullable();
            $table->decimal('tenant_charge_total_amount_exc_vat', 10, 2)->nullable();
            $table->decimal('tenant_charge_total_vat_amount', 10, 2)->nullable();
            $table->decimal('tenant_charge_total_amount_paid', 10, 2)->default(0.00);
            $table->integer('tenant_charge_branch')->nullable();
            $table->dateTime('tenant_charge_date_created')->nullable();
            $table->dateTime('tenant_charge_date_updated')->nullable();
            $table->integer('tenant_charge_created_by')->nullable();
            $table->integer('tenant_charge_updated_by')->nullable();

             // Foreign keys
            $table->foreign('tenant_charge_branch', 'fk_accounts_tenant_charge_tenant_charge_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_charge_created_by', 'fk_accounts_tenant_charge_tenant_charge_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_charge_payment_terms', 'fk_accounts_tenant_charge_tenant_charge_payment_terms')
                ->references('accounts_payment_term_id')->on('accounts_payment_term')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_charge_tenancy_id', 'fk_accounts_tenant_charge_tenant_charge_tenancy_id')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_charge_updated_by', 'fk_accounts_tenant_charge_tenant_charge_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_tenant_charge');
    }
}