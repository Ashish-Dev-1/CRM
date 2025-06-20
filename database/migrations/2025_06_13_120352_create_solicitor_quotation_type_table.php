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
        Schema::create('solicitor_quotation_type', function (Blueprint $table) {
            $table->tinyInteger('solicitor_quotation_type_id')->primary();
            $table->string('solicitor_quotation_type_name', 30)->nullable();
        });
    }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitor_quotation_type');
    }
};
