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
        Schema::create('property_withdrawal_reason', function (Blueprint $table) {
            $table->tinyInteger('property_withdrawal_reason_id')->primary();
            $table->text('property_withdrawal_reason_name')->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_withdrawal_reason');
    }
};
