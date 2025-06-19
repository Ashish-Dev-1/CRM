<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('valuation_status', function (Blueprint $table) {
            $table->tinyIncrements('valuation_status_id');
            $table->string('valuation_status_name', 50)->nullable();
            $table->tinyInteger('valuation_status_sort')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('valuation_status');
    }
};
