<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tenancy_responsible', function (Blueprint $table) {
            $table->integer('tenancy_responsible_id')->primary();
            $table->string('tenancy_responsible_name', 35)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenancy_responsible');
    }
};
