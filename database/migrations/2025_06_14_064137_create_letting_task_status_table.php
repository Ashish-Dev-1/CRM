<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up(): void
    {
        Schema::create('letting_task_status', function (Blueprint $table) {
            $table->tinyIncrements('letting_task_status_id');
            $table->string('letting_task_status_name', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letting_task_status');
    }
};
