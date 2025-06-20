<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyToParking extends Model
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
     * Get the PropertyParking associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(PropertyParking::class, 'property_parking_id', 'property_parking_id');
    }
}
