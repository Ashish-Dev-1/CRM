<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tenancy_payment_method', function (Blueprint $table) {
            $table->tinyInteger('tenancy_payment_method_id')->primary();
            $table->string('tenancy_payment_method_name', 30)->nullable();
            $table->string('tenancy_payment_method_description', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenancy_payment_method');
    }
};
