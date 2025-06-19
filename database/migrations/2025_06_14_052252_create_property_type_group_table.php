<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('property_type_group', function (Blueprint $table) {
            $table->integer('property_type_group_id')->primary();
            $table->string('property_type_group_name', 20)->nullable();
            $table->tinyInteger('property_type_group_active')->default(1);
            $table->tinyInteger('property_type_group_sort')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_type_group');
    }
};
