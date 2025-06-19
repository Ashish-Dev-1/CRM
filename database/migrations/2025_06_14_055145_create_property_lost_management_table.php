<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_lost_management', function (Blueprint $table) {
            $table->tinyInteger('property_lost_management_id')->primary();
            $table->text('property_lost_management_reason')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_lost_management');
    }
};
