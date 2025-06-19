<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tenancy_term_status', function (Blueprint $table) {
            $table->tinyInteger('tenancy_term_status_id')->primary();
            $table->string('tenancy_term_status_name', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenancy_term_status');
    }
};
