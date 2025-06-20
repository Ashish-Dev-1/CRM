<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('directory_to_trades', function (Blueprint $table) {
            $table->integer('directory_to_trades_id')->primary();
            $table->integer('directory_id');
            $table->integer('directory_trades_id');
            $table->foreign('directory_id', 'fk_directory_to_trades_directory_id')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('directory_trades_id', 'fk_directory_to_trades_directory_trades_id')
                ->references('directory_trades_id')->on('directory_trades')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('directory_to_trades');
    }
};
