<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('property_category', function (Blueprint $table) {
            $table->integer('property_category_id')->primary();
            $table->string('property_category_name', 20)
                ->charset('latin1')
                ->collation('latin1_swedish_ci')
                ->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_category');
    }
}
