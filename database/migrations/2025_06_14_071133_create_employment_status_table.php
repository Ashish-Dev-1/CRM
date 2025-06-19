<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employment_status', function (Blueprint $table) {
            $table->tinyInteger('employment_status_id')->primary();
            $table->string('employment_status_name', 20)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employment_status');
    }
};
