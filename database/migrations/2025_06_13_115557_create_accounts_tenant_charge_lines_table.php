<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTenantChargeLineTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts_tenant_charge_line', function (Blueprint $table) {
            $table->integer('tenant_charge_line_id')->primary();
            $table->integer('tenant_charge_id')->nullable();
            $table->tinyInteger('tenant_charge_line_type')->nullable();
            $table->text('tenant_charge_line_description')->nullable();
            $table->decimal('tenant_charge_line_amount', 10, 2)->nullable();
            $table->tinyInteger('tenant_charge_line_vat_rate')->nullable();
            $table->decimal('tenant_charge_line_vat_amount', 10, 2)->nullable();

            // Foreign keys
            $table->foreign('tenant_charge_id', 'fk_accounts_tenant_charge_line_tenant_charge_id')
                ->references('tenant_charge_id')->on('accounts_tenant_charge')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_charge_line_type', 'fk_accounts_tenant_charge_line_tenant_charge_line_type')
                ->references('tenant_charge_line_type_id')->on('accounts_tenant_charge_line_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_charge_line_vat_rate', 'fk_accounts_tenant_charge_line_tenant_charge_line_vat_r')
                ->references('vat_rate_id')->on('accounts_vat_rate')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_tenant_charge_line');
    }
}