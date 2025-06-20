<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeysAdd extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'keys_add_created_by', 'employee_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'keys_add_property', 'property_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'keys_add_updated_by', 'employee_id');
    }

    /**
     * Get the KeysAddFrom associated with this record.
     */
    public function from(): BelongsTo
    {
        return $this->belongsTo(KeysAddFrom::class, 'keys_add_from', 'keys_add_from_id');
    }
}
