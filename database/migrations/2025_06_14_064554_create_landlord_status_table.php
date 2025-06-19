<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up(): void
    {
        Schema::create('landlord_status', function (Blueprint $table) {
            $table->increments('landlord_status_id');
            $table->string('landlord_status_name', 15)->nullable()->charset('latin1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landlord_status');
    }
};
