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
        Schema::create('calendar_event_recurring', function (Blueprint $table) {
            $table->integer('calendar_event_recurring_id', true);
            $table->integer('calendar_event_recurring_calendar_event_id')->nullable();
            $table->smallInteger('calendar_event_recurring_frequency')->nullable();
            $table->tinyInteger('calendar_event_recurring_frequency_unit')->nullable();
            $table->date('calendar_event_recurring_start_date')->nullable();
            $table->date('calendar_event_recurring_next_processing_date')->nullable();
            $table->tinyInteger('calendar_event_recurring_suspended')->nullable();
            
             $table->foreign('calendar_event_recurring_calendar_event_id', 'fk_calendar_event_recurring_calendar_event_recurring_calend')
                ->references('calendar_event_id')->on('calendar_event')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_recurring_frequency_unit', 'fk_calendar_event_recurring_calendar_event_recurring_freque')
                ->references('recurring_frequency_unit_id')->on('accounts_recurring_frequency_unit')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_event_recurrings');
    }
};
