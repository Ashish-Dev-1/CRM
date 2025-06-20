<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('client_source', function (Blueprint $table) {
            $table->tinyInteger('client_source_id')->primary();
            $table->string('client_source_name', 30)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('client_source');
    }
};
