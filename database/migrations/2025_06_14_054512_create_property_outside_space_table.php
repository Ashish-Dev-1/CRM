<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_outside_space', function (Blueprint $table) {
            $table->integer('property_outside_space_id')->primary();
            $table->string('property_outside_space_name', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_outside_space');
    }
};
