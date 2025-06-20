<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationUpdates extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'application_updates_created_by', 'employee_id');
    }

    /**
     * Get the Application associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Application::class, 'application_updates_application_id', 'application_id');
    }
}
