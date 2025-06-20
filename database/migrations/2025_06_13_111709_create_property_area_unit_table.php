<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_area_unit', function (Blueprint $table) {
            $table->tinyInteger('property_area_unit_id')->primary();
            $table->string('property_area_unit_name', 15)
                
                
                ->nullable();
            $table->string('property_area_unit_singular', 15)->nullable();
            $table->string('property_area_unit_name_short', 10)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_area_unit');
    }
};
