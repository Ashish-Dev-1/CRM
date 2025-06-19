<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up(): void
    {
        Schema::create('landlord_nrl_status', function (Blueprint $table) {
            $table->increments('landlord_nrl_status_id');
            $table->string('landlord_nrl_status_name', 50)->nullable()->charset('latin1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landlord_nrl_status');
    }
};
