<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fee_type', function (Blueprint $table) {
            $table->integer('fee_type_id')->primary();
            $table->string('fee_type_name', 50)
                  ->charset('latin1')
                  ->collation('latin1_swedish_ci')
                  ->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fee_type');
    }
};
