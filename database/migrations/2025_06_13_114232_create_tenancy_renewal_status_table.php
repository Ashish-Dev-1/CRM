<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tenancy_renewal_status', function (Blueprint $table) {
            $table->tinyInteger('tenancy_renewal_status_id')->primary();
            $table->string('tenancy_renewal_status_name', 50)->nullable();
            $table->tinyInteger('tenancy_renewal_status_sort')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenancy_renewal_status');
    }
};
