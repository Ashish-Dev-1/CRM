<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DevelopmentUpdates extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'development_updates_created_by', 'employee_id');
    }

    /**
     * Get the Development associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Development::class, 'development_updates_development_id', 'development_id');
    }
}
