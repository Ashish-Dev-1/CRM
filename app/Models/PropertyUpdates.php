<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyUpdates extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_updates_created_by', 'employee_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_updates_property_id', 'property_id');
    }
}
