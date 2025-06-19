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
        Schema::create('certificate_statuses', function (Blueprint $table) {
            $table->tinyInteger('certificate_status_id', true);
            $table->string('certificate_status_name', 50)->nullable();
            $table->tinyInteger('certificate_status_sort')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificate_statuses');
    }
};
