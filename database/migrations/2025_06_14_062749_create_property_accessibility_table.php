<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyAccessibilityTable extends Migration
{
    public function up()
    {
        Schema::create('property_accessibility', function (Blueprint $table) {
            $table->integer('property_accessibility_id')->default(0)->primary();
            $table->string('property_accessibility_name', 40)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_accessibility');
    }
}
