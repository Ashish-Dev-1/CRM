<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyToOutsideSpace extends Model
{
    //

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    /**
     * Get the PropertyOutsideSpace associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(PropertyOutsideSpace::class, 'property_outside_space_id', 'property_outside_space_id');
    }
}
