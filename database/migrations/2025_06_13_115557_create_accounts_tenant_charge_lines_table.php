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
        Schema::create('accounts_tenant_charge_line', function (Blueprint $table) {
            $table->integer('tenant_charge_line_id')->primary();
            $table->integer('tenant_charge_id')->nullable();
            $table->tinyInteger('tenant_charge_line_type')->nullable();
            $table->text('tenant_charge_line_description')->nullable();
            $table->decimal('tenant_charge_line_amount', 10, 2)->nullable();
            $table->unsignedTinyInteger('tenant_charge_line_vat_rate')->nullable();
            $table->decimal('tenant_charge_line_vat_amount', 10, 2)->nullable();

            // Foreign keys
            $table->foreign('tenant_charge_id', 'fk_accounts_tenant_charge_line_tenant_charge_id')
                ->references('tenant_charge_id')->on('accounts_tenant_charge')
                ->onUpdate('cascade')->onDelete('restrict');
            // Note: Foreign key constraint for tenant_charge_line_type is removed here because 
            // the accounts_tenant_charge_line_type table is created after this migration.
            // This constraint will be added in a separate comprehensive migration.
            $table->foreign('tenant_charge_line_vat_rate', 'fk_accounts_tenant_charge_line_tenant_charge_line_vat_r')
                ->references('vat_rate_id')->on('accounts_vat_rates')
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
};