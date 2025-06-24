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
        Schema::create('sale_buyers', function (Blueprint $table) {
            $table->integer('sale_buyers_id')->primary();
            $table->integer('buyer_id')->nullable();
            $table->integer('sale_id')->nullable();

            // Foreign key constraints removed due to migration order issues
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_buyers');
    }
};
