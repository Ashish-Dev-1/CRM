<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_parking', function (Blueprint $table) {
            $table->integer('property_parking_id')->primary();
            $table->string('property_parking_name', 75)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_parking');
    }
};
