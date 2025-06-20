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
        Schema::create('income_frequency', function (Blueprint $table) {
            $table->tinyIncrements('income_frequency_id');
            $table->string('income_frequency_name', 15)->nullable()->default(null);
            $table->tinyInteger('income_frequency_sort')->nullable()->default(null);

            $table->unique('income_frequency_sort', 'income_frequency_sort');
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income_frequency');
    }
};
