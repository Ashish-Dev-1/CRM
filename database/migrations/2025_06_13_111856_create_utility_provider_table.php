<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('utility_provider', function (Blueprint $table) {
            $table->smallIncrements('utility_provider_id');
            $table->string('utility_provider_name', 50)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('utility_provider');
    }
};

