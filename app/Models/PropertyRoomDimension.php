<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyRoomDimension extends Model
{
    protected $table = 'property_room_dimension';
    
    public $timestamps = false;

        protected $fillable = [
        'property_room_dimension_name',
    ];

    /**
     * Get the property rooms that use this dimension unit.
     */
    
}