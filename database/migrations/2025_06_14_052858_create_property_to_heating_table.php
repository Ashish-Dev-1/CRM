<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_to_heating', function (Blueprint $table) {
            $table->integer('property_to_heating_id')->primary();
            $table->integer('property_id');
            $table->integer('property_heating_id');

             $table->foreign('property_id', 'fk_property_to_heating_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('property_heating_id', 'fk_property_to_heating_property_heating_id')
                ->references('property_heating_id')->on('property_heating')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_to_heating');
    }
};
