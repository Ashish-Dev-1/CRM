<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_status', function (Blueprint $table) {
            $table->integer('property_status_id')->primary();
            $table->string('property_status_name', 35)->nullable();
            $table->tinyInteger('property_status_type')->nullable();
            $table->string('property_status_name_short', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_status');
    }
};
