<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyAvailabilityTable extends Migration
{
    public function up()
    {
        Schema::create('property_availability', function (Blueprint $table) {
            $table->integer('property_availability_id')->primary();
            $table->string('property_availability_name', 10)
                ->charset('latin1')
                ->collation('latin1_swedish_ci')
                ->nullable();
            $table->string('property_availability_display_name', 20)->nullable();
            $table->string('property_availability_display_name2', 100)->nullable();
            $table->string('property_availability_seo_name', 30)->nullable();
            $table->string('property_availability_xml_name', 10)->nullable();
            $table->tinyInteger('property_availability_sort')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_availability');
    }
}
