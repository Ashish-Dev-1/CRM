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
        Schema::create('tenancy_deposit_protection_scheme', function (Blueprint $table) {
            $table->integer('tenancy_deposit_protection_scheme_id')->primary();
            $table->string('tenancy_deposit_protection_scheme_name', 30)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenancy_deposit_protection_scheme');
    }
};
