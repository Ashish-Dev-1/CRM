<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('property_viewing_type', function (Blueprint $table) {
            $table->tinyInteger('property_viewing_type_id')->primary();
            $table->string('property_viewing_type_name', 20)->nullable();
            $table->string('property_viewing_type_description', 100)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_viewing_type');
    }
};
