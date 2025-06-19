<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('utility', function (Blueprint $table) {
            $table->increments('utility_id');
            $table->string('utility_name', 15)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('utility');
    }
};
