<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    //

    /**
     * Get the PropertyTypeGroup associated with this record.
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(PropertyTypeGroup::class, 'property_type_group', 'property_type_group_id');
    }
}
