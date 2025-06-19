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
        Schema::create('calendar_event_time_off_pays', function (Blueprint $table) {
            $table->tinyInteger('calendar_event_time_off_pay_id', true);
            $table->string('calendar_event_time_off_pay_name', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_event_time_off_pays');
    }
};
