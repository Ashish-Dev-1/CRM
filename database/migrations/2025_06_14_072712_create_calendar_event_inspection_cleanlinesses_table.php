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
        Schema::create('calendar_event_inspection_cleanlinesses', function (Blueprint $table) {
            $table->integer('calendar_event_inspection_cleanliness_id', true);
            $table->string('calendar_event_inspection_cleanliness_name', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_event_inspection_cleanlinesses');
    }
};
