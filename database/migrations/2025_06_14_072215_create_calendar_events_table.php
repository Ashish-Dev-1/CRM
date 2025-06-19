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
        Schema::create('calendar_event', function (Blueprint $table) {
            $table->integer('calendar_event_id', true);
            $table->string('calendar_event_token', 40)->nullable();
            $table->integer('calendar_event_company_id')->nullable();
            $table->integer('calendar_event_branch_id')->nullable();
            $table->string('calendar_event_subject', 255)->nullable();
            $table->tinyInteger('calendar_event_status')->nullable();
            $table->dateTime('calendar_event_start')->nullable();
            $table->dateTime('calendar_event_end')->nullable();
            $table->string('calendar_event_location', 255)->nullable();
            $table->tinyInteger('calendar_event_type')->nullable();
            $table->integer('calendar_event_employee')->nullable();
            $table->text('calendar_event_description')->nullable();
            $table->integer('calendar_event_attendee_type')->nullable();
            $table->integer('calendar_event_property')->nullable();
            $table->integer('calendar_event_tenancy')->nullable();
            $table->integer('calendar_event_development')->nullable();
            $table->integer('calendar_event_applicant')->nullable();
            $table->integer('calendar_event_valuation')->nullable();
            $table->tinyInteger('calendar_event_valuation_appointment_type')->nullable();
            $table->tinyInteger('calendar_event_valuation_meeting_with')->nullable();
            $table->tinyInteger('calendar_event_meet_at')->nullable();
            $table->dateTime('calendar_event_date_created')->nullable();
            $table->dateTime('calendar_event_date_updated')->nullable();
            $table->integer('calendar_event_created_by')->nullable();
            $table->integer('calendar_event_updated_by')->nullable();
            $table->tinyInteger('calendar_event_confirmed_landlord_vendor')->nullable();
            $table->tinyInteger('calendar_event_confirmed_applicant')->nullable();
            $table->text('calendar_event_notes')->nullable();
            $table->text('calendar_event_private_notes')->nullable();
            $table->integer('calendar_event_branch')->nullable();
            $table->integer('calendar_event_recurring_id')->nullable();
            $table->text('calendar_event_cancellation_reason')->nullable();
            $table->string('calendar_event_surveyor_company_name', 255)->nullable();
            $table->string('calendar_event_surveyor_individual_name', 255)->nullable();
            $table->string('calendar_event_surveyor_phone_number', 20)->nullable();
            $table->string('calendar_event_surveyor_behalf_of', 255)->nullable();
            $table->integer('calendar_event_directory')->nullable();
            $table->tinyInteger('calendar_event_inspection_type')->nullable();
            $table->tinyInteger('calendar_event_survey_type')->nullable();
            $table->tinyInteger('calendar_event_time_off_type')->nullable();
            $table->tinyInteger('calendar_event_time_off_reason')->nullable();
            $table->tinyInteger('calendar_event_time_off_pay')->nullable();
            $table->tinyInteger('calendar_event_time_off_lunch_break')->nullable();
            $table->text('calendar_event_time_off_notes')->nullable();
            $table->tinyInteger('calendar_event_time_off_linked_sickness')->nullable()->default(2);
            $table->tinyInteger('calendar_event_bulk_email')->default(1);
            $table->integer('calendar_event_letting_application')->nullable();
            $table->tinyInteger('calendar_event_viewing_length_override')->nullable();
            $table->tinyInteger('calendar_event_extra_hours_reward_type')->nullable();
            // Remove the default timestamps as we have custom date fields
            // $table->timestamps();
            // Foreign keys
            $table->foreign('calendar_event_applicant', 'fk_calendar_event_calendar_event_applicant')
                ->references('applicant_id')->on('applicant')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_branch', 'fk_calendar_event_calendar_event_branch')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_branch_id', 'fk_calendar_event_calendar_event_branch_id')
                ->references('branch_id')->on('branch')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_company_id', 'fk_calendar_event_calendar_event_company_id')
                ->references('company_id')->on('company')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_created_by', 'fk_calendar_event_calendar_event_created_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_development', 'fk_calendar_event_calendar_event_development')
                ->references('development_id')->on('development')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_directory', 'fk_calendar_event_calendar_event_directory')
                ->references('directory_id')->on('directory')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_employee', 'fk_calendar_event_calendar_event_employee')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_property', 'fk_calendar_event_calendar_event_property')
                ->references('property_id')->on('property')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_tenancy', 'fk_calendar_event_calendar_event_tenancy')
                ->references('tenancy_id')->on('tenancy')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_updated_by', 'fk_calendar_event_calendar_event_updated_by')
                ->references('employee_id')->on('employee')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_valuation', 'fk_calendar_event_calendar_event_valuation')
                ->references('valuation_id')->on('valuation')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_status', 'fk_calendar_event_calendar_event_status')
                ->references('calendar_event_status_id')->on('calendar_event_status')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_type', 'fk_calendar_event_calendar_event_type')
                ->references('calendar_event_type_id')->on('calendar_event_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_attendee_type', 'fk_calendar_event_fk_calendar_event_calendar_event_type')
                ->references('calendar_event_attendee_type_id')->on('calendar_event_attendee_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_valuation_appointment_type', 'fk_calendar_event_calendar_event_valuation_appointment_type')
                ->references('valuation_appointment_type_id')->on('valuation_appointment_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_valuation_meeting_with', 'fk_calendar_event_calendar_event_valuation_meeting_with')
                ->references('valuation_meeting_with_id')->on('valuation_meeting_with')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_meet_at', 'fk_calendar_event_calendar_event_meet_at')
                ->references('calendar_event_meet_at_id')->on('calendar_event_meet_at')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_recurring_id', 'fk_calendar_event_calendar_event_recurring_id')
                ->references('calendar_event_recurring_id')->on('calendar_event_recurring')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_inspection_type', 'fk_calendar_event_calendar_event_inspection_type')
                ->references('calendar_event_inspection_type_id')->on('calendar_event_inspection_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_survey_type', 'fk_calendar_event_calendar_event_survey_type')
                ->references('calendar_event_survey_type_id')->on('calendar_event_survey_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_time_off_type', 'fk_calendar_event_calendar_event_time_off_type')
                ->references('calendar_event_time_off_type_id')->on('calendar_event_time_off_type')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_time_off_reason', 'fk_calendar_event_calendar_event_time_off_reason')
                ->references('calendar_event_time_off_reason_id')->on('calendar_event_time_off_reason')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_time_off_pay', 'fk_calendar_event_calendar_event_time_off_pay')
                ->references('calendar_event_time_off_pay_id')->on('calendar_event_time_off_pay')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_letting_application', 'fk_calendar_event_calendar_event_letting_application')
                ->references('application_id')->on('application')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('calendar_event_extra_hours_reward_type', 'fk_calendar_event_calendar_event_extra_hours_reward_type')
                ->references('id')->on('extra_hours_reward_type')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_event');
    }
};