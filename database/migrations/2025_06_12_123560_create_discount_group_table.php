<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('discount_group', function (Blueprint $table) {
            $table->tinyInteger('discount_group_id')->primary();
            $table->string('discount_group_name', 50)->nullable();
            $table->tinyInteger('discount_group_sort')->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discount_group');
    }
};
