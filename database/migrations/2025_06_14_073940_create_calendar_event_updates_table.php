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
        Schema::create('calendar_event_updates', function (Blueprint $table) {
            $table->integer('calendar_event_updates_id', true);
            $table->integer('calendar_event_updates_calendar_event_id')->nullable();
            $table->text('calendar_event_updates_private_notes')->nullable();
            $table->dateTime('calendar_event_updates_date_created')->nullable();
            $table->integer('calendar_event_updates_created_by')->nullable();
            
            // Add foreign key constraints
            $table->foreign('calendar_event_updates_created_by', 'fk_calendar_event_updates_calendar_event_updates_create')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_updates_calendar_event_id', 'fk_calendar_event_updates_calendar_event_updates_calendar_e')
                ->references('calendar_event_id')->on('calendar_event')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_event_updates');
    }
};
