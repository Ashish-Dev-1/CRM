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
        Schema::create('referral_payment_type', function (Blueprint $table) {
            $table->tinyInteger('referral_payment_type_id', false, true)->primary(); // tinyint(4)
            $table->string('referral_payment_type_name', 50)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referral_payment_type');
    }
};
