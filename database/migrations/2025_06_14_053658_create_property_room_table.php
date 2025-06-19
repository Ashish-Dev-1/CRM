<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_room', function (Blueprint $table) {
            $table->integer('property_room_id')->primary();
            $table->integer('property_id')->nullable();
            $table->string('property_room_name', 120)->nullable();
            $table->text('property_room_description')->nullable();
            $table->decimal('property_room_length', 6, 2)->nullable();
            $table->decimal('property_room_width', 6, 2)->nullable();
            $table->tinyInteger('property_room_dimension_unit')->nullable();
            $table->string('property_room_dimension_text', 120)->nullable();
            $table->text('property_room_images_url')->nullable();
            $table->tinyInteger('property_room_sort')->nullable();

            $table->foreign('property_id', 'fk_property_room_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('property_room_dimension_unit', 'fk_property_room_dimension_unit')
                ->references('property_room_dimension_id')->on('property_room_dimension')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_room');
    }
};
