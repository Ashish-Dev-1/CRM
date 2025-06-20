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
        Schema::create('property_images', function (Blueprint $table) {
            $table->integer('image_id')->primary();
            $table->integer('property_id');
            $table->string('filename', 100);
            $table->string('caption', 100)->default('');
            $table->integer('filesize')->default(0);
            $table->dateTime('date_added')->nullable();
            $table->mediumInteger('sort')->nullable();
            $table->mediumInteger('sort_highlights')->default(127);
            $table->tinyInteger('floor_plan')->default(0);

            // Foreign key
            $table->foreign('property_id', 'property_images_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_images');
    }
};
