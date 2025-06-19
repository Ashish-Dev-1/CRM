<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyConditionTable extends Migration
{
    public function up()
    {
        Schema::create('property_condition', function (Blueprint $table) {
            $table->tinyInteger('property_condition_id')->primary();
            $table->string('property_condition_name', 50)->charset('latin1')->collation('latin1_swedish_ci')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_condition');
    }
}
