<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('selective_licencing_licence_holder', function (Blueprint $table) {
            $table->tinyInteger('selective_licencing_licence_holder_id')->primary();
            $table->string('selective_licencing_licence_holder_name', 50)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selective_licencing_licence_holder');
    }
};
