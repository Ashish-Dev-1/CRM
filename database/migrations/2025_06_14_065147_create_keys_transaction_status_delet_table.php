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
        Schema::create('keys_transaction_status_delet', function (Blueprint $table) {
            $table->tinyIncrements('keys_transaction_status_id');
            $table->string('keys_transaction_status_name', 15)->nullable();
            $table->tinyInteger('keys_transaction_status_sort')->nullable();
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
        Schema::dropIfExists('keys_transaction_status_delet');
    }
};
