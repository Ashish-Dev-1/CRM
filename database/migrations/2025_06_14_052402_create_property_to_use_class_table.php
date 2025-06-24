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
        Schema::create('property_to_use_class', function (Blueprint $table) {
            $table->integer('property_to_use_class_id')->primary();
            $table->unsignedInteger('property_id')->nullable();
            $table->integer('property_use_class_id');

            $table->foreign('property_id', 'fk_property_to_use_class_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('property_use_class_id', 'fk_property_to_use_class_property_use_class_id')
                ->references('property_use_class_id')->on('property_use_class')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_to_use_class');
    }
};
