<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('directory_trades', function (Blueprint $table) {
            $table->integer('directory_trades_id')->primary();
            $table->string('directory_trades_name', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('directory_trades');
    }
};
