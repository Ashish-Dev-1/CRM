<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('letting_service', function (Blueprint $table) {
            $table->tinyIncrements('letting_service_id');
            $table->string('letting_service_name', 100)->nullable()->charset('latin1');
            $table->string('letting_service_name_short', 10)->nullable();
            $table->boolean('letting_service_archived')->default(2);
            $table->tinyInteger('letting_service_sort', 1)->nullable();

            // Index
            $table->index(['letting_service_id', 'letting_service_archived', 'letting_service_sort'], 'letting_service_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letting_service');
    }
};
