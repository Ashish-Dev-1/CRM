<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTenantChargeRecurringTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts_tenant_charge_recurrings', function (Blueprint $table) {
            $table->integer('tenant_charge_recurring_id')->primary();
            $table->integer('tenant_charge_recurring_tenant_charge_id')->nullable();
            $table->integer('tenant_charge_recurring_tenancy_id')->nullable();
            $table->smallInteger('tenant_charge_recurring_frequency')->nullable();
            $table->tinyInteger('tenant_charge_recurring_frequency_unit')->nullable();
            $table->date('tenant_charge_recurring_start_date')->nullable();
            $table->date('tenant_charge_recurring_end_date')->default('0000-00-00');
            $table->date('tenant_charge_recurring_next_processing_date')->nullable();
            $table->tinyInteger('tenant_charge_recurring_suspended')->nullable();
            $table->dateTime('tenant_charge_recurring_date_created')->nullable();
            $table->dateTime('tenant_charge_recurring_date_updated')->nullable();
            $table->integer('tenant_charge_recurring_created_by')->nullable();
            $table->integer('tenant_charge_recurring_updated_by')->nullable();

            // Foreign keys
            $table->foreign('tenant_charge_recurring_frequency_unit', 'fk_acc_ten_cha_rec_ten_cha_rec_fre_uni')
                ->references('recurring_frequency_unit_id')->on('accounts_recurring_frequency_unit')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_charge_recurring_tenant_charge_id', 'fk_acc_ten_cha_rec_ten_cha_rec_ten_cha_id')
                ->references('tenant_charge_id')->on('accounts_tenant_charge')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_charge_recurring_tenancy_id', 'fk_accounts_tenant_charge_recurring_tenant_charge_recur')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_charge_recurring_created_by', 'fk_accounts_tenant_charge_recurring_tenant_charge_recur_1')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_charge_recurring_updated_by', 'fk_accounts_tenant_charge_recurring_tenant_charge_recur_2')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_tenant_charge_recurrings');
    }
}