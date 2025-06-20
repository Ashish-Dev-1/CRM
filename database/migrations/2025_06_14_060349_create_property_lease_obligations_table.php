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
        Schema::create('property_lease_obligations', function (Blueprint $table) {
            $table->tinyInteger('property_lease_obligations_id')->primary();
            $table->string('property_lease_obligations_name', 100)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_lease_obligations');
    }
};
