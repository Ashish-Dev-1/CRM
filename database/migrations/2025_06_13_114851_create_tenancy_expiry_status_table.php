<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tenancy_expiry_status', function (Blueprint $table) {
            $table->tinyInteger('tenancy_expiry_status_id')->primary();
            $table->string('tenancy_expiry_status_name', 60)->nullable();
            $table->tinyInteger('tenancy_expiry_status_sort')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenancy_expiry_status');
    }
};
