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
        Schema::create('vehicle', function (Blueprint $table) {
            $table->integer('vehicle_id')->primary();
            $table->string('vehicle_registration', 10)->nullable();
            $table->string('vehicle_make_model', 30)->nullable();
            $table->tinyInteger('vehicle_archived')->default(2);
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle');
    }
};
