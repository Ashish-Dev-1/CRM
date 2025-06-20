<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_entrance_floor', function (Blueprint $table) {
            $table->integer('property_entrance_floor_id')->primary();
            $table->string('property_entrance_floor_name', 50)->nullable();
            $table->tinyInteger('property_entrance_floor_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_entrance_floor');
    }
};
