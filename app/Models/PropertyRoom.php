<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyRoom extends Model
{
    protected $table = 'property_room';
    protected $primaryKey = 'property_room_id';
    public $timestamps = false;

    protected $fillable = [
        'property_room_property',
        'property_room_name',
        'property_room_description',
        'property_room_width',
        'property_room_length',
        'property_room_dimension',
        'property_room_dimension_unit',
        'property_room_floor',
        // ...other fields...
    ];

    /**
     * Get the property that owns the room.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_room_property', 'property_id');
    }

    /**
     * Get the dimension unit of the room.
     */
    public function dimensionUnit(): BelongsTo
    {
        return $this->belongsTo(PropertyRoomDimension::class, 'property_room_dimension_unit', 'property_room_dimension_id');
    }

    /**
     * Get the floor of the room.
     */
    public function floor(): BelongsTo
    {
        return $this->belongsTo(PropertyFloor::class, 'property_room_floor', 'property_floor_id');
    }
}