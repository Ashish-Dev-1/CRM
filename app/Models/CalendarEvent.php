<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CalendarEvent extends Model
{
    protected $table = 'calendar_event';
    protected $primaryKey = 'calendar_event_id';
    public $timestamps = false;

        protected $fillable = [
        'calendar_event_id',
        'calendar_event_token',
        'calendar_event_company_id',
        'calendar_event_branch_id',
        'calendar_event_subject',
        'calendar_event_status',
        'calendar_event_start',
        'calendar_event_end',
        'calendar_event_location',
        'calendar_event_type',
        'calendar_event_employee',
        'calendar_event_description',
        'calendar_event_attendee_type',
        'calendar_event_property',
        'calendar_event_tenancy',
        'calendar_event_development',
        'calendar_event_applicant',
        'calendar_event_valuation',
        'calendar_event_valuation_appointment_type',
        'calendar_event_valuation_meeting_with',
        'calendar_event_meet_at',
        'calendar_event_date_created',
        'calendar_event_date_updated',
        'calendar_event_created_by',
        'calendar_event_updated_by',
        'calendar_event_confirmed_landlord_vendor',
        'calendar_event_confirmed_applicant',
        'calendar_event_notes',
        'calendar_event_private_notes',
        'calendar_event_branch',
        'calendar_event_recurring_id',
        'calendar_event_cancellation_reason',
        'calendar_event_surveyor_company_name',
        'calendar_event_surveyor_individual_name',
        'calendar_event_surveyor_phone_number',
        'calendar_event_surveyor_behalf_of',
        'calendar_event_directory',
        'calendar_event_inspection_type',
        'calendar_event_survey_type',
        'calendar_event_time_off_type',
        'calendar_event_time_off_reason',
        'calendar_event_time_off_pay',
        'calendar_event_time_off_lunch_break',
        'calendar_event_time_off_notes',
        'calendar_event_time_off_linked_sickness',
        'calendar_event_bulk_email',
        'calendar_event_letting_application',
        'calendar_event_viewing_length_override',
        'calendar_event_extra_hours_reward_type',
    ];

    protected $casts = [
        'calendar_event_id' => 'integer',
        'calendar_event_company_id' => 'integer',
        'calendar_event_branch_id' => 'integer',
        'calendar_event_status' => 'integer',
        'calendar_event_start' => 'datetime',
        'calendar_event_end' => 'datetime',
        'calendar_event_type' => 'integer',
        'calendar_event_employee' => 'integer',
        'calendar_event_attendee_type' => 'integer',
        'calendar_event_property' => 'integer',
        'calendar_event_tenancy' => 'integer',
        'calendar_event_development' => 'integer',
        'calendar_event_applicant' => 'integer',
        'calendar_event_valuation' => 'integer',
        'calendar_event_valuation_appointment_type' => 'integer',
        'calendar_event_valuation_meeting_with' => 'integer',
        'calendar_event_meet_at' => 'integer',
        'calendar_event_date_created' => 'datetime',
        'calendar_event_date_updated' => 'datetime',
        'calendar_event_created_by' => 'integer',
        'calendar_event_updated_by' => 'integer',
        'calendar_event_confirmed_landlord_vendor' => 'integer',
        'calendar_event_confirmed_applicant' => 'integer',
        'calendar_event_branch' => 'integer',
        'calendar_event_recurring_id' => 'integer',
        'calendar_event_directory' => 'integer',
        'calendar_event_inspection_type' => 'integer',
        'calendar_event_survey_type' => 'integer',
        'calendar_event_time_off_type' => 'integer',
        'calendar_event_time_off_reason' => 'integer',
        'calendar_event_time_off_pay' => 'integer',
        'calendar_event_time_off_lunch_break' => 'integer',
        'calendar_event_time_off_linked_sickness' => 'integer',
        'calendar_event_bulk_email' => 'integer',
        'calendar_event_letting_application' => 'integer',
        'calendar_event_viewing_length_override' => 'integer',
        'calendar_event_extra_hours_reward_type' => 'integer',
    ];

        protected $dates = [
        'calendar_event_start',
        'calendar_event_end',
        'calendar_event_date_created',
        'calendar_event_date_updated',
    ];

    /**
     * Get the type of this calendar event.
     */
    

    /**
     * Get the status of this calendar event.
     */
    

    /**
     * Get the location of this calendar event.
     */
    

    /**
     * Get the employee assigned to this calendar event.
     */
    

    /**
     * Get the branch associated with this calendar event.
     */
    

    /**
     * Get the property associated with this calendar event.
     */
    

    /**
     * Get the landlord associated with this calendar event.
     */
    

    /**
     * Get the vendor associated with this calendar event.
     */
    

    /**
     * Get the applicant associated with this calendar event.
     */
    

    /**
     * Get the tenant associated with this calendar event.
     */
    

    /**
     * Get the employee who created this calendar event.
     */
    

    /**
     * Get the employee who updated this calendar event.
     */
    

    /**
     * Get the viewing details if this is a viewing event.
     */
    public function viewing(): HasOne
    {
        return $this->hasOne(CalendarEventViewing::class, 'calendar_event_viewing_calendar_event', 'calendar_event_id');
    }

    /**
     * Get the inspection details if this is an inspection event.
     */
    public function inspection(): HasOne
    {
        return $this->hasOne(CalendarEventInspection::class, 'calendar_event_inspection_calendar_event', 'calendar_event_id');
    }

    /**
     * Get the files associated with this calendar event.
     */
    

    /**
     * Get the updates for this calendar event.
     */
    

    /**
     * Get the Applicant associated with this record.
     */
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'calendar_event_applicant', 'applicant_id');
    }

    /**
     * Get the Branch associated with this record.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'calendar_event_branch', 'branch_id');
    }

    /**
     * Get the Branch associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'calendar_event_branch_id', 'branch_id');
    }

    /**
     * Get the Company associated with this record.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'calendar_event_company_id', 'company_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_created_by', 'employee_id');
    }

    /**
     * Get the Development associated with this record.
     */
    public function development(): BelongsTo
    {
        return $this->belongsTo(Development::class, 'calendar_event_development', 'development_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function directory(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'calendar_event_directory', 'directory_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_employee', 'employee_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'calendar_event_property', 'property_id');
    }

    /**
     * Get the Tenancy associated with this record.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'calendar_event_tenancy', 'tenancy_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_updated_by', 'employee_id');
    }

    /**
     * Get the Valuation associated with this record.
     */
    public function valuation(): BelongsTo
    {
        return $this->belongsTo(Valuation::class, 'calendar_event_valuation', 'valuation_id');
    }

    /**
     * Get the CalendarEventStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(CalendarEventStatus::class, 'calendar_event_status', 'calendar_event_status_id');
    }

    /**
     * Get the CalendarEventType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(CalendarEventType::class, 'calendar_event_type', 'calendar_event_type_id');
    }

    /**
     * Get the CalendarEventAttendeeType associated with this record.
     */
    public function attendeeType(): BelongsTo
    {
        return $this->belongsTo(CalendarEventAttendeeType::class, 'calendar_event_attendee_type', 'calendar_event_attendee_type_id');
    }

    /**
     * Get the ValuationAppointmentType associated with this record.
     */
    public function valuationAppointmentType(): BelongsTo
    {
        return $this->belongsTo(ValuationAppointmentType::class, 'calendar_event_valuation_appointment_type', 'valuation_appointment_type_id');
    }

    /**
     * Get the ValuationMeetingWith associated with this record.
     */
    public function with(): BelongsTo
    {
        return $this->belongsTo(ValuationMeetingWith::class, 'calendar_event_valuation_meeting_with', 'valuation_meeting_with_id');
    }

    /**
     * Get the CalendarEventMeetAt associated with this record.
     */
    public function at(): BelongsTo
    {
        return $this->belongsTo(CalendarEventMeetAt::class, 'calendar_event_meet_at', 'calendar_event_meet_at_id');
    }

    /**
     * Get the CalendarEventRecurring associated with this record.
     */
    public function recurring(): BelongsTo
    {
        return $this->belongsTo(CalendarEventRecurring::class, 'calendar_event_recurring_id', 'calendar_event_recurring_id');
    }

    /**
     * Get the CalendarEventInspectionType associated with this record.
     */
    public function inspectionType(): BelongsTo
    {
        return $this->belongsTo(CalendarEventInspectionType::class, 'calendar_event_inspection_type', 'calendar_event_inspection_type_id');
    }

    /**
     * Get the CalendarEventSurveyType associated with this record.
     */
    public function surveyType(): BelongsTo
    {
        return $this->belongsTo(CalendarEventSurveyType::class, 'calendar_event_survey_type', 'calendar_event_survey_type_id');
    }

    /**
     * Get the CalendarEventTimeOffType associated with this record.
     */
    public function timeOffType(): BelongsTo
    {
        return $this->belongsTo(CalendarEventTimeOffType::class, 'calendar_event_time_off_type', 'calendar_event_time_off_type_id');
    }

    /**
     * Get the CalendarEventTimeOffReason associated with this record.
     */
    public function reason(): BelongsTo
    {
        return $this->belongsTo(CalendarEventTimeOffReason::class, 'calendar_event_time_off_reason', 'calendar_event_time_off_reason_id');
    }

    /**
     * Get the CalendarEventTimeOffPay associated with this record.
     */
    public function pay(): BelongsTo
    {
        return $this->belongsTo(CalendarEventTimeOffPay::class, 'calendar_event_time_off_pay', 'calendar_event_time_off_pay_id');
    }

    /**
     * Get the Application associated with this record.
     */
    public function application(): BelongsTo
    {
        return $this->belongsTo(Application::class, 'calendar_event_letting_application', 'application_id');
    }

    /**
     * Get the ExtraHoursRewardType associated with this record.
     */
    public function extraHoursRewardType(): BelongsTo
    {
        return $this->belongsTo(ExtraHoursRewardType::class, 'calendar_event_extra_hours_reward_type', 'id');
    }
}