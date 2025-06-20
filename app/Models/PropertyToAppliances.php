<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyToAppliances extends Model
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
     * Get the PropertyAppliances associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(PropertyAppliances::class, 'property_appliances_id', 'property_appliances_id');
    }
}
