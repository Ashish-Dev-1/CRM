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
        Schema::create('application_statuses', function (Blueprint $table) {
            $table->tinyInteger('application_status_id')->primary();
            $table->string('application_status_name', 50)->nullable();
            $table->tinyInteger('application_status_sort')->nullable();
            $table->tinyInteger('application_status_archived')->default(2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_statuses');
    }
};
