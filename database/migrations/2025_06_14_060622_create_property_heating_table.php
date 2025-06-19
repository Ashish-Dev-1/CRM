<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_heating', function (Blueprint $table) {
            $table->integer('property_heating_id')->default(0)->primary();
            $table->string('property_heating_name', 30)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_heating');
    }
};
