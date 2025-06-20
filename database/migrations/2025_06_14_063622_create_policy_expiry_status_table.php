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
        Schema::create('policy_expiry_status', function (Blueprint $table) {
            $table->tinyIncrements('policy_expiry_status_id');
            $table->string('policy_expiry_status_name', 50)->nullable();
            $table->tinyInteger('policy_expiry_status_sort')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policy_expiry_status');
    }
};
