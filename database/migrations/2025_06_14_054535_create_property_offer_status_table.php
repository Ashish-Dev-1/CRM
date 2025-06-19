<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_offer_status', function (Blueprint $table) {
            $table->integer('property_offer_status_id')->primary();
            $table->string('property_offer_status_name', 35);
            $table->tinyInteger('property_offer_status_sort')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_offer_status');
    }
};
