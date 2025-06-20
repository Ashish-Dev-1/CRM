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
        Schema::create('property_offer_sale_chain_status', function (Blueprint $table) {
            $table->tinyInteger('property_offer_sale_chain_status_id')->primary();
            $table->string('property_offer_sale_chain_status_name', 30)->nullable();
            $table->tinyInteger('property_offer_sale_chain_status_sort')->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_offer_sale_chain_status');
    }
};
