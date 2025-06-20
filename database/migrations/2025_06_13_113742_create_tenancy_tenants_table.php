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
        Schema::create('tenancy_tenants', function (Blueprint $table) {
            $table->id('tenancy_tenants_id');
            $table->integer('tenant_id')->nullable();
            $table->integer('tenancy_id')->nullable();
            $table->tinyInteger('tenant_lead')->nullable();
            $table->integer('property_id')->nullable();

            $table->foreign('tenant_id', 'fk_tenancy_tenants_tenant_id')
                ->references('tenant_id')->on('tenant')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('tenancy_id', 'fk_tenancy_tenants_tenancy_id')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_id', 'fk_tenancy_tenants_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenancy_tenants');
    }
};
