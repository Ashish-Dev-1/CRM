<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('town_city_delete', function (Blueprint $table) {
            $table->integer('town_city_id')->primary();
            $table->string('town_city_name', 60)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('town_city_delete');
    }
};
