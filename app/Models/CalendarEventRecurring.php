<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarEventRecurring extends Model
{
    //

    /**
     * Get the CalendarEvent associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(CalendarEvent::class, 'calendar_event_recurring_calendar_event_id', 'calendar_event_id');
    }

    /**
     * Get the AccountsRecurringFrequencyUnit associated with this record.
     */
    public function unit(): BelongsTo
    {
        return $this->belongsTo(AccountsRecurringFrequencyUnit::class, 'calendar_event_recurring_frequency_unit', 'recurring_frequency_unit_id');
    }
}
