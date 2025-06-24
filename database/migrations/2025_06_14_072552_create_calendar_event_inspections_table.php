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
        Schema::create('calendar_event_inspections', function (Blueprint $table) {
            $table->integer('calendar_event_inspection_id', true);
            $table->integer('calendar_event_inspection_calendar_event_id')->nullable();
            $table->integer('calendar_event_inspection_cleanliness')->nullable();
            $table->tinyInteger('calendar_event_inspection_gardens')->nullable();
            $table->tinyInteger('calendar_event_inspection_pets')->nullable();
            $table->tinyInteger('calendar_event_inspection_smoking')->nullable();
            $table->tinyInteger('calendar_event_inspection_additional_occupants')->nullable();
            $table->tinyInteger('calendar_event_inspection_mould')->nullable();
            $table->text('calendar_event_inspection_public_notes')->nullable();
            $table->text('calendar_event_inspection_private_notes')->nullable();
            $table->text('calendar_event_inspection_repair_requests')->nullable();
            
           $table->foreign('calendar_event_inspection_calendar_event_id', 'fk_calendar_event_bulk_email_calendar_event_inspection_cale')
                ->references('calendar_event_id')->on('calendar_event')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_inspection_cleanliness', 'fk_calendar_event_inspection_calendar_event_inspection_clea')
                ->references('calendar_event_inspection_cleanliness_id')->on('calendar_event_inspection_cleanlinesses')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_inspection_gardens', 'fk_calendar_event_inspection_calendar_event_inspection_gardens')
                ->references('calendar_event_inspection_gardens_id')->on('calendar_event_inspection_gardenses')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_event_inspections');
    }
};
