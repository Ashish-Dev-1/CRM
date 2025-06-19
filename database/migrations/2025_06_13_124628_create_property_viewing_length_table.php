<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_viewing_length', function (Blueprint $table) {
            $table->tinyInteger('property_viewing_length_id')->primary();
            $table->string('property_viewing_length_name', 20)->nullable();
            $table->tinyInteger('property_viewing_length_minutes')->nullable();
            $table->tinyInteger('property_viewing_length_sort')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_viewing_length');
    }
};
