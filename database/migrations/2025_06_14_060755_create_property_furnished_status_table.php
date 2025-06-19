<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_furnished_status', function (Blueprint $table) {
            $table->integer('property_furnished_status_id')->default(0)->primary();
            $table->string('property_furnished_status_name', 40)->nullable();
            $table->tinyInteger('property_furnished_status_rightmove')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_furnished_status');
    }
};
