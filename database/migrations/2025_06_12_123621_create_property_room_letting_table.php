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
        Schema::create('property_room_letting', function (Blueprint $table) {
            $table->integer('property_room_letting_id')->primary();
            $table->unsignedInteger('property_id')->nullable();
            $table->tinyInteger('property_room_letting_sort');
            $table->integer('property_room_letting_status')->nullable();
            $table->decimal('property_room_letting_rent', 6, 2)->nullable();
            $table->integer('property_room_letting_rent_frequency')->nullable();
            $table->decimal('property_room_letting_deposit', 6, 2)->nullable();
            $table->tinyInteger('property_room_letting_size')->nullable();
            $table->tinyInteger('property_room_letting_floor')->nullable();
            $table->tinyInteger('property_room_letting_en_suite')->nullable();
            $table->integer('property_room_letting_furnished')->nullable();
            $table->date('property_room_letting_available_from')->nullable();
            $table->tinyInteger('property_room_letting_gender')->nullable();
            $table->date('property_room_letting_dob')->nullable();
            $table->string('property_room_letting_profession', 255)->nullable();

            $table->foreign('property_id', 'fk_property_room_letting_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('property_room_letting_status', 'fk_property_room_letting_property_room_letting_status')
                ->references('property_status_id')->on('property_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_room_letting_rent_frequency', 'fk_property_room_letting_property_room_letting_rent_frequency')
                ->references('property_rent_frequency_id')->on('property_rent_frequency')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_room_letting_size', 'fk_property_room_letting_property_room_letting_size')
                ->references('property_room_letting_size_id')->on('property_room_letting_size')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_room_letting_floor', 'fk_property_room_letting_property_room_letting_floor')
                ->references('property_floor_id')->on('property_floor')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_room_letting_furnished', 'fk_property_room_letting_property_room_letting_furnished')
                ->references('property_furnished_status_id')->on('property_furnished_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('property_room_letting_gender', 'fk_property_room_letting_property_room_letting_gender')
                ->references('gender_id')->on('gender')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_room_letting');
    }
};
