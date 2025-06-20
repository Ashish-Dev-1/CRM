<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tenancy_deposit_protection_responsible', function (Blueprint $table) {
            $table->tinyInteger('tenancy_deposit_protection_responsible_id')->primary();
            $table->string('tenancy_deposit_protection_responsible_name', 20)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenancy_deposit_protection_responsible');
    }
};
