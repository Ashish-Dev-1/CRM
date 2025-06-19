<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_tenancy', function (Blueprint $table) {
            $table->integer('property_tenancy_id')->primary();
            $table->integer('property_id')->nullable();
            $table->string('property_tenancy_description', 255)->nullable();
            $table->string('property_tenancy_tenant', 255)->nullable();
            $table->tinyInteger('property_tenancy_bedrooms')->nullable();
            $table->decimal('property_tenancy_size', 8, 2)->nullable();
            $table->tinyInteger('property_tenancy_size_unit')->nullable();
            $table->decimal('property_tenancy_rent', 11, 2)->nullable();
            $table->tinyInteger('property_tenancy_rent_frequency')->nullable();
            $table->decimal('property_tenancy_erv', 11, 2)->nullable();
            $table->tinyInteger('property_tenancy_erv_frequency')->nullable();
            $table->tinyInteger('property_tenancy_lease_type')->nullable();
            $table->date('property_tenancy_lease_start_date')->nullable();
            $table->date('property_tenancy_lease_expiry_date')->nullable();
            $table->text('property_tenancy_public_notes')->nullable();
            $table->tinyInteger('property_tenancy_sort')->nullable();

            $table->foreign('property_id', 'fk_property_tenancy_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('property_tenancy_size_unit', 'fk_property_tenancy_property_tenancy_size_unit')
                ->references('property_area_unit_id')->on('property_area_unit')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_tenancy_rent_frequency', 'fk_property_tenancy_rent_frequency')
                ->references('tenancy_rent_frequency_id')->on('tenancy_rent_frequency')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_tenancy_erv_frequency', 'fk_property_tenancy_erv_frequency')
                ->references('tenancy_rent_frequency_id')->on('tenancy_rent_frequency')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_tenancy_lease_type', 'fk_property_tenancy_property_tenancy_lease_type')
                ->references('lease_type_id')->on('lease_type')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_tenancy');
    }
};
