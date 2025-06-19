<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('motivational_quotes', function (Blueprint $table) {
            $table->smallIncrements('motivational_quotes_id');
            $table->text('motivational_quotes_text')->nullable();

            // Indexes
            $table->unique('motivational_quotes_text', 'motivational_quotes_text');
            $table->index('motivational_quotes_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motivational_quotes');
    }
};
