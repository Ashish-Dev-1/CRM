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
        Schema::create('programming_task_status', function (Blueprint $table) {
            $table->tinyIncrements('programming_task_status_id');
            $table->string('programming_task_status_name', 50)->nullable();
            $table->tinyInteger('programming_task_status_sort')->nullable();
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
        Schema::dropIfExists('programming_task_status');
    }
};
