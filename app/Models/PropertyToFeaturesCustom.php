<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyToFeaturesCustom extends Model
{
    //

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}
