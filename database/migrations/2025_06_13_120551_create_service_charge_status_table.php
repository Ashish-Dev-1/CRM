<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('service_charge_status', function (Blueprint $table) {
            $table->tinyInteger('service_charge_status_id')->primary();
            $table->string('service_charge_status_name', 75)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_charge_status');
    }
};
