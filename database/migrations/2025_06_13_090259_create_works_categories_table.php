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
        Schema::create('works_category', function (Blueprint $table) {
            $table->id('works_category_id');
            $table->string('works_category_name', 50)->nullable();
            $table->tinyInteger('works_category_sort')->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works_category');
    }
};
