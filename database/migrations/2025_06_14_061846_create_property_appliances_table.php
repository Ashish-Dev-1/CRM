<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_appliances', function (Blueprint $table) {
            $table->integer('property_appliances_id')->primary();
            $table->string('property_appliances_name', 60)->nullable();
            $table->tinyInteger('property_appliances_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_appliances');
    }
};
