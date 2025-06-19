<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('led_pocket_action', function (Blueprint $table) {
            $table->tinyIncrements('led_pocket_action_id');
            $table->string('led_pocket_action_name', 50)->nullable();
            $table->tinyInteger('led_pocket_action_sort')->nullable();

            // Unique index
            $table->unique('led_pocket_action_name', 'led_pocket_action_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('led_pocket_action');
    }
};
