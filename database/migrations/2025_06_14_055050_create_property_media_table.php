<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_media', function (Blueprint $table) {
            $table->integer('property_media_id')->primary();
            $table->integer('property_media_property_id')->nullable();
            $table->text('property_media_link')->nullable();
            $table->tinyInteger('property_media_type')->nullable();

            // Foreign key
            $table->foreign('property_media_property_id', 'fk_property_media_property_media_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_media');
    }
};
