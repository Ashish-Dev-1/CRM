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
        Schema::create('calendar_event_viewing', function (Blueprint $table) {
            $table->integer('calendar_event_viewing_id', true);
            $table->integer('calendar_event_viewing_calendar_event_id')->nullable();
            $table->text('calendar_event_viewing_pros')->nullable();
            $table->text('calendar_event_viewing_cons')->nullable();
            $table->decimal('calendar_event_viewing_ptp', 11, 2)->nullable();
            $table->integer('calendar_event_viewing_confidence_level')->nullable();
            $table->text('calendar_event_viewing_public_notes')->nullable();
            $table->text('calendar_event_viewing_private_notes')->nullable();
            $table->tinyInteger('calendar_event_viewing_type')->nullable();
            $table->tinyInteger('calendar_event_viewings_referral_solicitor')->nullable();
            $table->tinyInteger('calendar_event_viewings_referral_mortgage')->nullable();
            $table->tinyInteger('calendar_event_viewings_referral_valuation')->nullable();
            $table->text('calendar_event_viewing_next_review_date')->nullable();
            $table->dateTime('calendar_event_viewing_date_created')->nullable();
            $table->dateTime('calendar_event_viewing_date_updated')->nullable();
            $table->integer('calendar_event_viewing_created_by')->nullable();
            $table->integer('calendar_event_viewing_updated_by')->nullable();
            
           $table->foreign('calendar_event_viewing_created_by', 'fk_calendar_event_viewing_calendar_event_viewing_create')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_viewing_updated_by', 'fk_calendar_event_viewing_calendar_event_viewing_update')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_viewing_calendar_event_id', 'fk_calendar_event_viewing_calendar_event_viewing_calendar_e')
                ->references('calendar_event_id')->on('calendar_event')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_viewing_confidence_level', 'fk_calendar_event_viewing_calendar_event_viewing_confidence')
                ->references('calendar_event_confidence_id')->on('calendar_event_confidences')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_viewing_type', 'fk_calendar_event_viewing_calendar_event_viewing_type')
                ->references('calendar_event_viewing_type_id')->on('calendar_event_viewing_type')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_event_viewings');
    }
};
