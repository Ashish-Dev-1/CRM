<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_to_appliances', function (Blueprint $table) {
            $table->integer('property_to_appliances_id')->primary();
            $table->integer('property_id');
            $table->integer('property_appliances_id');

            $table->foreign('property_id', 'fk_property_to_appliances_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('property_appliances_id', 'fk_property_to_appliances_property_appliances_id')
                ->references('property_appliances_id')->on('property_appliances')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_to_appliances');
    }
};
