<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_vendor', function (Blueprint $table) {
            $table->integer('property_vendor_id')->primary();
            $table->integer('property_id')->nullable();
            $table->integer('vendor_id')->nullable();
            $table->tinyInteger('vendor_lead')->nullable();
            $table->tinyInteger('vendor_official')->default(1);

            // Note: The following FK is unusual, as it links property_vendor_id to vendor.vendor_id.
            // This is as per your SQL, but usually you'd link vendor_id to vendor.vendor_id.
            $table->foreign('property_vendor_id', 'fk_property_vendor_property_vendor_id')
                ->references('vendor_id')->on('vendor')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_id', 'fk_property_vendor_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_vendor');
    }
};
