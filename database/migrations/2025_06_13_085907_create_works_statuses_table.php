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
        Schema::create('works_status', function (Blueprint $table) {
            $table->id('works_status_id');
            $table->string('works_status_name', 40)->nullable();
            $table->tinyInteger('works_status_sort')->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works_status');
    }
};
