<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('test', function (Blueprint $table) {
            $table->string('test_field')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('test');
    }
};
