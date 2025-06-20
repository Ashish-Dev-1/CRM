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
        Schema::create('standing_order_payments_frequency', function (Blueprint $table) {
            $table->integer('standing_order_payments_frequency_id')->primary();
            $table->string('standing_order_payments_frequency_name', 20)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('standing_order_payments_frequency');
    }
};
