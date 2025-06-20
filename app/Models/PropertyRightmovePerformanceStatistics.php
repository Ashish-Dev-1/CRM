<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyRightmovePerformanceStatistics extends Model
{
    //

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'prps_property_id', 'property_id');
    }

    /**
     * Get the PropertyAvailability associated with this record.
     */
    public function availability(): BelongsTo
    {
        return $this->belongsTo(PropertyAvailability::class, 'prps_property_availability', 'property_availability_id');
    }

    /**
     * Get the PropertyStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(PropertyStatus::class, 'prps_property_status', 'property_status_id');
    }
}
