<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('letting_type', function (Blueprint $table) {
            $table->increments('letting_type_id');
            $table->string('letting_type_name', 10)->nullable()->charset('latin1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letting_type');
    }
};
