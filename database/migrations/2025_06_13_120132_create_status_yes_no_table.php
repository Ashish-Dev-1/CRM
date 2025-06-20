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
        Schema::create('status_yes_no', function (Blueprint $table) {
            $table->integer('status_yes_no_id')->primary();
            $table->string('status_yes_no_name', 3)->nullable();
            $table->tinyInteger('status_yes_no_backup')->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_yes_no');
    }
};
