<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('valuation_reason', function (Blueprint $table) {
            $table->tinyIncrements('valuation_reason_id');
            $table->string('valuation_reason_name', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('valuation_reason');
    }
};
