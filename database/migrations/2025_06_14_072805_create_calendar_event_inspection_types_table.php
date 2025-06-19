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
        Schema::create('calendar_event_inspection_types', function (Blueprint $table) {
            $table->tinyInteger('calendar_event_inspection_type_id', true);
            $table->string('calendar_event_inspection_type_name', 50)->nullable();
            $table->tinyInteger('calendar_event_inspection_type_sort')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_event_inspection_types');
    }
};
