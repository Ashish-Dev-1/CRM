<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyToAccessibility extends Model
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
     * Get the PropertyAccessibility associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(PropertyAccessibility::class, 'property_accessibility_id', 'property_accessibility_id');
    }
}
