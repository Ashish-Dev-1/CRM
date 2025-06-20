<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('country', function (Blueprint $table) {
            $table->integer('country_id')->primary();
            $table->string('country_name', 255)->nullable();
            $table->string('country_code', 5)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('country');
    }
};
