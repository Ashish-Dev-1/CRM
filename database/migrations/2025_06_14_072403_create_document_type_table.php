<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('document_type', function (Blueprint $table) {
            $table->integer('document_type_id')->primary();
            $table->string('document_type_name', 50)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_type');
    }
};
