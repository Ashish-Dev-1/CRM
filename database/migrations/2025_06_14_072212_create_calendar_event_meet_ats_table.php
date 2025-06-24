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
        Schema::create('calendar_event_meet_ats', function (Blueprint $table) {
            $table->integer('calendar_event_meet_at_id', true);
            $table->string('calendar_event_meet_at_name', 10)->nullable();
            $table->tinyInteger('calendar_event_meet_at_sort')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_event_meet_ats');
    }
};
