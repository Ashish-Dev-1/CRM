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
        Schema::create('property_security', function (Blueprint $table) {
            $table->tinyInteger('property_security_id')->primary();
            $table->string('property_security_name', 75)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_security');
    }
};
