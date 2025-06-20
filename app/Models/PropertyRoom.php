<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyRoom extends Model
{
    protected $table = 'property_room';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'property_id',
        'property_room_name',
        'property_room_description',
        'property_room_length',
        'property_room_width',
        'property_room_dimension_unit',
        'property_room_dimension_text',
        'property_room_images_url',
        'property_room_sort',
    ];

    protected $casts = [
        'property_id' => 'integer',
        'property_room_length' => 'decimal:2',
        'property_room_width' => 'decimal:2',
        'property_room_dimension_unit' => 'integer',
        'property_room_sort' => 'integer',
    ];

    /**
     * Get the property that owns the room.
     */
    

    /**
     * Get the dimension unit of the room.
     */
    

    /**
     * Get the floor of the room.
     */
    

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    /**
     * Get the PropertyRoomDimension associated with this record.
     */
    public function unit(): BelongsTo
    {
        return $this->belongsTo(PropertyRoomDimension::class, 'property_room_dimension_unit', 'property_room_dimension_id');
    }
}