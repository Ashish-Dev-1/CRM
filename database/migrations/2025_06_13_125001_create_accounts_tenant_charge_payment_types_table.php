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
        Schema::create('accounts_tenant_charge_payment_types', function (Blueprint $table) {
            $table->tinyInteger('accounts_tenant_charge_payment_type_id')->primary();
            $table->string('accounts_tenant_charge_payment_type_name', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_tenant_charge_payment_types');
    }
};