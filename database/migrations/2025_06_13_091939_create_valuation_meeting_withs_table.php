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
        Schema::create('valuation_meeting_with', function (Blueprint $table) {
            $table->tinyIncrements('valuation_meeting_with_id');
            $table->string('valuation_meeting_with_name', 30)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valuation_meeting_with');
    }
};
