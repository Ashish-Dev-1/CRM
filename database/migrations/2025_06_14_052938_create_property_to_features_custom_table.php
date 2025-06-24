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
        Schema::create('property_to_features_custom', function (Blueprint $table) {
            $table->integer('property_to_features_custom_id')->primary();
            $table->unsignedInteger('property_id')->nullable();
            $table->string('property_feature', 200);

            $table->foreign('property_id', 'fk_property_to_features_custom_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_to_features_custom');
    }
};
