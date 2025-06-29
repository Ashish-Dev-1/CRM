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
        Schema::create('gender', function (Blueprint $table) {
            $table->tinyInteger('gender_id')->primary();
            $table->string('gender_name', 6)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gender');
    }
};
