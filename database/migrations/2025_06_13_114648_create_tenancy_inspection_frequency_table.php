<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tenancy_inspection_frequency', function (Blueprint $table) {
            $table->tinyInteger('tenancy_inspection_frequency_id')->primary();
            $table->string('tenancy_inspection_frequency_name', 15)->nullable();
            $table->tinyInteger('tenancy_inspection_frequency_sort')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenancy_inspection_frequency');
    }
};
