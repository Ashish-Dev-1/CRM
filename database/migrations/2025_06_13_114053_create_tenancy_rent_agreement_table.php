<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tenancy_rent_agreement', function (Blueprint $table) {
            $table->integer('tenancy_rent_agreement_id')->primary();
            $table->string('tenancy_rent_agreement_name', 10)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenancy_rent_agreement');
    }
};
