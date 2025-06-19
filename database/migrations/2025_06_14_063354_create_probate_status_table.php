<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('probate_status', function (Blueprint $table) {
            $table->tinyIncrements('probate_status_id');
            $table->string('probate_status_name', 30)->nullable();
            $table->tinyInteger('probate_status_sort')->nullable();

            // Indexes
            $table->unique('probate_status_sort', 'probate_status_sort');
            $table->index('probate_status_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('probate_status');
    }
};
