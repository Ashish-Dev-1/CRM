<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('utility_meter', function (Blueprint $table) {
            $table->increments('utility_meter_id');
            $table->integer('utility_meter_property')->nullable();
            $table->tinyInteger('utility_meter_utility')->nullable();
            $table->tinyInteger('utility_meter_type')->nullable();
            $table->tinyInteger('utility_meter_location')->nullable();
            $table->string('utility_meter_notes', 255)->nullable();
            $table->smallInteger('utility_meter_provider')->nullable();

            $table->foreign('utility_meter_property', 'fk_utility_meter_utility_meter_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('utility_meter_utility', 'fk_utility_meter_utility_meter_utility')
                ->references('utility_id')->on('utility')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('utility_meter_type', 'fk_utility_meter_utility_meter_type')
                ->references('utility_meter_type_id')->on('utility_meter_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('utility_meter_location', 'fk_utility_meter_utility_meter_location')
                ->references('utility_meter_location_id')->on('utility_meter_location')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('utility_meter_provider', 'fk_utility_meter_utility_meter_provider')
                ->references('utility_provider_id')->on('utility_provider')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('utility_meter');
    }
};
