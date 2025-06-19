<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sale_status', function (Blueprint $table) {
            $table->tinyInteger('sale_status_id')->primary();
            $table->string('sale_status_name', 30)->nullable();
            $table->tinyInteger('sale_status_sort')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sale_status');
    }
};
