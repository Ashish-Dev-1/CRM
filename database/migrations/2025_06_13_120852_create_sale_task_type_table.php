<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sale_task_type', function (Blueprint $table) {
            $table->tinyInteger('sale_task_type_id')->primary();
            $table->string('sale_task_type_name', 10)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sale_task_type');
    }
};
