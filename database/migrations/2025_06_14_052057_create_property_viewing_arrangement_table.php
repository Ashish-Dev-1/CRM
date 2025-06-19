<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_viewing_arrangement', function (Blueprint $table) {
            $table->tinyInteger('property_viewing_arrangement_id')->primary();
            $table->string('property_viewing_arrangement_name', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_viewing_arrangement');
    }
};
