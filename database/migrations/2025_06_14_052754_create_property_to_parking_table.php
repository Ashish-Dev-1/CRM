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
        Schema::create('property_to_parking', function (Blueprint $table) {
            $table->integer('property_to_parking_id')->primary();
            $table->integer('property_id');
            $table->integer('property_parking_id');

            $table->foreign('property_id', 'fk_property_to_parking_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('property_parking_id', 'fk_property_to_parking_property_parking_id')
                ->references('property_parking_id')->on('property_parking')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_to_parking');
    }
};
