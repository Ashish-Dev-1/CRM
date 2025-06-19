<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tenancy_rent_frequency', function (Blueprint $table) {
            $table->integer('tenancy_rent_frequency_id')->primary();
            $table->string('tenancy_rent_frequency_name', 25)->nullable();
            $table->tinyInteger('tenancy_rent_frequency_sort')->nullable();
            $table->text('tenancy_rent_frequency_description')->nullable();
            $table->string('tenancy_rent_frequency_short', 10)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenancy_rent_frequency');
    }
};
