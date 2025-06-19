<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('title', function (Blueprint $table) {
            $table->integer('title_id')->primary();
            $table->string('title_name', 10)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('title');
    }
};
