<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_category', function (Blueprint $table) {
            $table->integer('property_category_id')->primary();
            $table->string('property_category_name', 20)
                
                
                ->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_category');
    }
};
