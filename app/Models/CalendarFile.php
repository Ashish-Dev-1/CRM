<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CalendarFile extends Model
{
    protected $table = 'calendar_files';
    protected $primaryKey = 'calendar_files_id';
    public $timestamps = false;

    protected $fillable = [
        'calendar_files_calendar_event',
        'calendar_files_name',
        'calendar_files_filename',
        'calendar_files_date_created',
        'calendar_files_date_updated',
        'calendar_files_created_by',
        'calendar_files_updated_by',
    ];

    protected $dates = [
        'calendar_files_date_created',
        'calendar_files_date_updated',
    ];

    /**
     * Get the calendar event that owns the file.
     */
    public function calendarEvent(): BelongsTo
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_files_calendar_event', 'calendar_event_id');
    }

    /**
     * Get the employee who created the file.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_files_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the file.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'calendar_files_updated_by', 'employee_id');
    }
}