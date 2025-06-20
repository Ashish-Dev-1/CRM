<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyToHeating extends Model
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
     * Get the PropertyHeating associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(PropertyHeating::class, 'property_heating_id', 'property_heating_id');
    }
}
