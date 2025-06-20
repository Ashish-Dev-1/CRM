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
        Schema::create('sale_collapsed_reason', function (Blueprint $table) {
            $table->tinyInteger('sale_collapsed_reason_id')->primary();
            $table->string('sale_collapsed_reason_name', 255)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sale_collapsed_reason');
    }
};
