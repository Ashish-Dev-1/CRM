<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('export_date_type', function (Blueprint $table) {
            $table->tinyInteger('export_date_type_id')->primary();
            $table->string('export_date_type_name', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('export_date_type');
    }
};
