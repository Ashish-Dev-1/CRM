<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyToUseClass extends Model
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
     * Get the PropertyUseClass associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(PropertyUseClass::class, 'property_use_class_id', 'property_use_class_id');
    }
}
