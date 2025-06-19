<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTenantChargePaymentTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts_tenant_charge_payments', function (Blueprint $table) {
            $table->integer('tenant_charge_payment_id')->primary();
            $table->date('tenant_charge_payment_date')->nullable();
            $table->decimal('tenant_charge_payment_amount', 10, 2)->nullable();
            $table->tinyInteger('tenant_charge_payment_method')->nullable();
            $table->integer('tenant_charge_payment_tenant_charge_id')->nullable();
            $table->text('tenant_charge_payment_notes')->nullable();
            $table->tinyInteger('accounts_tenant_charge_payment_type')->nullable();
            $table->tinyInteger('tenant_charge_housing_benefit')->nullable();
            $table->dateTime('tenant_charge_payment_date_created')->nullable();
            $table->dateTime('tenant_charge_payment_date_updated')->nullable();
            $table->integer('tenant_charge_payment_created_by')->nullable();
            $table->integer('tenant_charge_payment_updated_by')->nullable();

             // Foreign keys
            $table->foreign('accounts_tenant_charge_payment_type', 'fk_acc_ten_cha_pay_acc_ten_cha_pay_typ')
                ->references('accounts_tenant_charge_payment_type_id')->on('accounts_tenant_charge_payment_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_charge_payment_tenant_charge_id', 'fk_acc_ten_cha_pay_ten_cha_pay_ten_cha_id')
                ->references('tenant_charge_id')->on('accounts_tenant_charge')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_charge_payment_created_by', 'fk_accounts_tenant_charge_payment_tenant_charge_payment')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_charge_payment_updated_by', 'fk_accounts_tenant_charge_payment_tenant_charge_payment_1')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_charge_payment_method', 'fk_accounts_tenant_charge_payment_tenant_charge_payment_method')
                ->references('payment_method_id')->on('accounts_payment_method')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_tenant_charge_payments');
    }
}