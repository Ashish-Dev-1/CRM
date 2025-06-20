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
        Schema::create('possession_status_completion', function (Blueprint $table) {
            $table->tinyIncrements('possession_status_completion_id');
            $table->string('possession_status_completion_name', 30)->nullable();
            $table->tinyInteger('possession_status_completion_sort')->nullable();

            // Unique index
            $table->unique('possession_status_completion_sort', 'possession_status_completion_sort');
        });
    }

    /**
     * Reverse the migrations.
     */
        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('possession_status_completion');
    }
};
