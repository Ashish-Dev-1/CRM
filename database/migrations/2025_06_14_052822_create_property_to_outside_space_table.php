<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_to_outside_space', function (Blueprint $table) {
            $table->integer('property_to_outside_space_id')->primary();
            $table->integer('property_id');
            $table->integer('property_outside_space_id');

            $table->foreign('property_id', 'fk_property_to_outside_space_property_id')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('property_outside_space_id', 'fk_property_to_outside_space_property_outside_space_id')
                ->references('property_outside_space_id')->on('property_outside_space')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_to_outside_space');
    }
};
