<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('task_status', function (Blueprint $table) {
            $table->tinyInteger('task_status_id')->primary();
            $table->string('task_status_name', 30)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('task_status');
    }
};
