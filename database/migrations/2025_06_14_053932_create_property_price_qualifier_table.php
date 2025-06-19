<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_price_qualifier', function (Blueprint $table) {
            $table->tinyInteger('price_qualifier_id')->default(0)->primary();
            $table->string('price_qualifier_name', 50)->nullable();
            $table->string('price_qualifier_name_short', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_price_qualifier');
    }
};
