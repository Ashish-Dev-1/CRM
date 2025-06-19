<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDateRangeTable extends Migration
{
    public function up()
    {
        Schema::create('date_range', function (Blueprint $table) {
            $table->tinyInteger('date_range_id')->primary();
            $table->string('date_range_name', 50)->nullable();
            $table->tinyInteger('date_range_sort')->nullable();
            $table->text('date_range_period')->nullable();
            $table->string('date_range_date_format', 20)->nullable();
            $table->tinyInteger('date_range_group')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('date_range');
    }
}
