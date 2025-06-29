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
        Schema::create('property_vendor', function (Blueprint $table) {
            $table->unsignedBigInteger('property_vendor_id')->primary();
            $table->unsignedInteger('property_id')->nullable();
            $table->unsignedBigInteger('vendor_id')->nullable();
            $table->tinyInteger('vendor_lead')->nullable();
            $table->tinyInteger('vendor_official')->default(1);

            // Fixed: Link vendor_id to vendor.vendor_id instead of property_vendor_id
            $table->foreign('vendor_id', 'fk_property_vendor_vendor_id')
                ->references('vendor_id')->on('vendor')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_id', 'fk_property_vendor_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_vendor');
    }
};
