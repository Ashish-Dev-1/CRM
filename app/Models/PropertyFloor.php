<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyFloor extends Model
{
    protected $table = 'property_floor';
    protected $primaryKey = 'property_floor_id';
    public $timestamps = false;

    protected $fillable = [
        'property_floor_name',
        'property_floor_description',
        'property_floor_sort',
    ];

    /**
     * Get the property rooms on this floor.
     */
    public function propertyRooms(): HasMany
    {
        return $this->hasMany(PropertyRoom::class, 'property_room_floor', 'property_floor_id');
    }
}