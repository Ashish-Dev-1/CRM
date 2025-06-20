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
        Schema::create('extra_hours_reward_type', function (Blueprint $table) {
            $table->tinyInteger('id')->primary();
            $table->string('name', 50)->nullable();
            $table->tinyInteger('sort')->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extra_hours_reward_type');
    }
};
