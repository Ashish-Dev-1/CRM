<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectoryCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('directory_category', function (Blueprint $table) {
            $table->integer('directory_category_id')->primary();
            $table->string('directory_category_name', 50)->nullable();
            $table->tinyInteger('directory_category_contractor')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('directory_category');
    }
}
