<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_room_dimension', function (Blueprint $table) {
            $table->integer('property_room_dimension_id')->default(0)->primary();
            $table->string('property_room_dimension_name', 30)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_room_dimension');
    }
};
