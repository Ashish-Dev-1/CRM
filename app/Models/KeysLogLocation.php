<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeysLogLocation extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'keys_log_location_updated_by', 'employee_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    /**
     * Get the KeysLocation associated with this record.
     */
    public function location(): BelongsTo
    {
        return $this->belongsTo(KeysLocation::class, 'keys_location', 'keys_location_id');
    }
}
