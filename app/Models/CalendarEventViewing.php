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
        'calendar_event_viewing_calendar_event',
        'calendar_event_viewing_type',
        'calendar_event_viewing_length',
        'calendar_event_viewing_feedback',
        'calendar_event_viewing_feedback_date',
        'calendar_event_viewing_feedback_employee',
        'calendar_event_viewing_confidence',
        'calendar_event_viewing_date_created',
        'calendar_event_viewing_date_updated',
        'calendar_event_viewing_created_by',
        'calendar_event_viewing_updated_by',
    ];

    protected $dates = [
        'calendar_event_viewing_feedback_date',
        'calendar_event_viewing_date_created',
        'calendar_event_viewing_date_updated',
    ];

    /**
     * Get the calendar event that this viewing belongs to.
     */
    public function calendarEvent(): BelongsTo
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_event_viewing_calendar_event', 'calendar_event_id');
    }

    /**
     * Get the type of this viewing.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(CalendarEventViewingType::class, 'calendar_event_viewing_type', 'calendar_event_viewing_type_id');
    }

    /**
     * Get the length of this viewing.
     */
    public function length(): BelongsTo
    {
        return $this->belongsTo(PropertyViewingLength::class, 'calendar_event_viewing_length', 'property_viewing_length_id');
    }

    /**
     * Get the confidence level of this viewing.
     */
    public function confidence(): BelongsTo
    {
        return $this->belongsTo(CalendarEventConfidence::class, 'calendar_event_viewing_confidence', 'calendar_event_confidence_id');
    }

    /**
     * Get the employee who provided feedback for this viewing.
     */
    public function feedbackEmployee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_viewing_feedback_employee', 'employee_id');
    }

    /**
     * Get the employee who created this viewing.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_viewing_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this viewing.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_viewing_updated_by', 'employee_id');
    }
}