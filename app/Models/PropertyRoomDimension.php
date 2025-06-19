<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyRoomDimension extends Model
{
    protected $table = 'property_room_dimension';
    protected $primaryKey = 'property_room_dimension_id';
    public $timestamps = false;

    protected $fillable = [
        'property_room_dimension_name',
        'property_room_dimension_description',
    ];

    /**
     * Get the property rooms that use this dimension unit.
     */
    public function propertyRooms(): HasMany
    {
        return $this->hasMany(PropertyRoom::class, 'property_room_dimension_unit', 'property_room_dimension_id');
    }
}