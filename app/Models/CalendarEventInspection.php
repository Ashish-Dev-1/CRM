<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CalendarEventInspection extends Model
{
    protected $table = 'calendar_event_inspection';
    protected $primaryKey = 'calendar_event_inspection_id';
    public $timestamps = false;

    protected $fillable = [
        'calendar_event_inspection_calendar_event',
        'calendar_event_inspection_type',
        'calendar_event_inspection_notes',
        'calendar_event_inspection_cleanliness',
        'calendar_event_inspection_tenant_present',
        'calendar_event_inspection_further_action',
        'calendar_event_inspection_further_action_notes',
        'calendar_event_inspection_date_created',
        'calendar_event_inspection_date_updated',
        'calendar_event_inspection_created_by',
        'calendar_event_inspection_updated_by',
    ];

    protected $dates = [
        'calendar_event_inspection_date_created',
        'calendar_event_inspection_date_updated',
    ];

    /**
     * Get the calendar event that this inspection belongs to.
     */
    public function calendarEvent(): BelongsTo
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_event_inspection_calendar_event', 'calendar_event_id');
    }

    /**
     * Get the type of this inspection.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(CalendarEventInspectionType::class, 'calendar_event_inspection_type', 'calendar_event_inspection_type_id');
    }

    /**
     * Get the cleanliness rating for this inspection.
     */
    public function cleanliness(): BelongsTo
    {
        return $this->belongsTo(CalendarEventInspectionCleanliness::class, 'calendar_event_inspection_cleanliness', 'calendar_event_inspection_cleanliness_id');
    }

    /**
     * Get the employee who created this inspection.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_inspection_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this inspection.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_event_inspection_updated_by', 'employee_id');
    }
}