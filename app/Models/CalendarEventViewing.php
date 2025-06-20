<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CalendarEventViewing extends Model
{
    protected $table = 'calendar_event_viewing';
    protected $primaryKey = 'calendar_event_viewing_id';
    public $timestamps = false;

        protected $fillable = [
        'calendar_event_viewing_id',
        'calendar_event_viewing_calendar_event_id',
        'calendar_event_viewing_pros',
        'calendar_event_viewing_cons',
        'calendar_event_viewing_ptp',
        'calendar_event_viewing_confidence_level',
        'calendar_event_viewing_public_notes',
        'calendar_event_viewing_private_notes',
        'calendar_event_viewing_type',
        'calendar_event_viewings_referral_solicitor',
        'calendar_event_viewings_referral_mortgage',
        'calendar_event_viewings_referral_valuation',
        'calendar_event_viewing_next_review_date',
        'calendar_event_viewing_date_created',
        'calendar_event_viewing_date_updated',
        'calendar_event_viewing_created_by',
        'calendar_event_viewing_updated_by',
    ];

    protected $casts = [
        'calendar_event_viewing_id' => 'integer',
        'calendar_event_viewing_calendar_event_id' => 'integer',
        'calendar_event_viewing_ptp' => 'decimal:2',
        'calendar_event_viewing_confidence_level' => 'integer',
        'calendar_event_viewing_type' => 'integer',
        'calendar_event_viewings_referral_solicitor' => 'integer',
        'calendar_event_viewings_referral_mortgage' => 'integer',
        'calendar_event_viewings_referral_valuation' => 'integer',
        'calendar_event_viewing_date_created' => 'datetime',
        'calendar_event_viewing_date_updated' => 'datetime',
        'calendar_event_viewing_created_by' => 'integer',
        'calendar_event_viewing_updated_by' => 'integer',
    ];

        protected $dates = [
        'calendar_event_viewing_date_created',
        'calendar_event_viewing_date_updated',
    ];

    /**
     * Get the calendar event that this viewing belongs to.
     */
    

    /**
     * Get the type of this viewing.
     */
    

    /**
     * Get the length of this viewing.
     */
    

    /**
     * Get the confidence level of this viewing.
     */
    

    /**
     * Get the employee who provided feedback for this viewing.
     */
    

    /**
     * Get the employee who created this viewing.
     */
    

    /**
     * Get the employee who updated this viewing.
     */
    

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_viewing_created_by', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_viewing_updated_by', 'employee_id');
    }

    /**
     * Get the CalendarEvent associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_event_viewing_calendar_event_id', 'calendar_event_id');
    }

    /**
     * Get the CalendarEventConfidence associated with this record.
     */
    public function level(): BelongsTo
    {
        return $this->belongsTo(CalendarEventConfidence::class, 'calendar_event_viewing_confidence_level', 'calendar_event_confidence_id');
    }

    /**
     * Get the CalendarEventViewingType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(CalendarEventViewingType::class, 'calendar_event_viewing_type', 'calendar_event_viewing_type_id');
    }
}