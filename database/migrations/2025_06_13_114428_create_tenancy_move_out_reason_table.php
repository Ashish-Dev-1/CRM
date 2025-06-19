<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tenancy_move_out_reason', function (Blueprint $table) {
            $table->tinyInteger('tenancy_move_out_reason_id')->primary();
            $table->string('tenancy_move_out_reason_name', 255)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tenancy_move_out_reason');
    }
};
