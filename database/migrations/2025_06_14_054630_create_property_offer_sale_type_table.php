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
        Schema::create('property_offer_sale_type', function (Blueprint $table) {
            $table->tinyInteger('property_offer_sale_type_id')->primary();
            $table->string('property_offer_sale_type_name', 25)->nullable();
            $table->string('property_offer_sale_type_description', 50)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_offer_sale_type');
    }
};
