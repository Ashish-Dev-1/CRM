<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tenant_income', function (Blueprint $table) {
            $table->id('tenant_income_id');
            $table->bigInteger('tenant_income_tenant_id')->nullable();
            $table->decimal('tenant_income_amount', 10, 2)->nullable();
            $table->tinyInteger('tenant_income_frequency')->nullable();
            $table->string('tenant_income_source')->nullable();

            $table->foreign('tenant_income_tenant_id', 'fk_tenant_income_tenant_income_tenant_id')
                ->references('tenant_id')->on('tenant')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenant_income_frequency', 'fk_tenant_income_tenant_income_frequency')
                ->references('income_frequency_id')->on('income_frequency')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_income');
    }
};
