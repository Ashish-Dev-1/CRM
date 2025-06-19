<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('referral_sale_purchase', function (Blueprint $table) {
            $table->tinyInteger('referral_sale_purchase_id', false, true)->primary(); // tinyint(1)
            $table->string('referral_sale_purchase_name', 30)->nullable();
            $table->tinyInteger('referral_sale_purchase_sort', false, true)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('referral_sale_purchase');
    }
};
