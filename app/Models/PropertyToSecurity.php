<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyToSecurity extends Model
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
     * Get the PropertySecurity associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(PropertySecurity::class, 'property_security_id', 'property_security_id');
    }
}
