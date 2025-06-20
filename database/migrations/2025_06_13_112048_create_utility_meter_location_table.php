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
        Schema::create('utility_meter_location', function (Blueprint $table) {
            $table->increments('utility_meter_location_id');
            $table->string('utility_meter_location_name', 50)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utility_meter_location');
    }
};
