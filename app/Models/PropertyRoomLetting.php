<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyRoomLetting extends Model
{
    protected $table = 'property_room_letting';
    
    public $timestamps = false;

        protected $fillable = [
        'property_id',
        'property_room_letting_sort',
        'property_room_letting_status',
        'property_room_letting_rent',
        'property_room_letting_rent_frequency',
        'property_room_letting_deposit',
        'property_room_letting_size',
        'property_room_letting_floor',
        'property_room_letting_en_suite',
        'property_room_letting_furnished',
        'property_room_letting_available_from',
        'property_room_letting_gender',
        'property_room_letting_dob',
        'property_room_letting_profession',
    ];

    protected $casts = [
        'property_id' => 'integer',
        'property_room_letting_sort' => 'integer',
        'property_room_letting_status' => 'integer',
        'property_room_letting_rent' => 'decimal:2',
        'property_room_letting_rent_frequency' => 'integer',
        'property_room_letting_deposit' => 'decimal:2',
        'property_room_letting_size' => 'integer',
        'property_room_letting_floor' => 'integer',
        'property_room_letting_en_suite' => 'integer',
        'property_room_letting_furnished' => 'integer',
        'property_room_letting_available_from' => 'date',
        'property_room_letting_gender' => 'integer',
        'property_room_letting_dob' => 'date',
    ];

        protected $dates = [
        'property_room_letting_available_from',
        'property_room_letting_dob',
    ];

    /**
     * Get the property room that this letting belongs to.
     */

    /**
     * Get the rent frequency for this letting.
     */

    /**
     * Get the size type for this letting.
     */

    /**
     * Get the preferred gender for this letting.
     */

    /**
     * Get the employee who created this letting.
     */

    /**
     * Get the employee who updated this letting.
     */

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    /**
     * Get the PropertyStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(PropertyStatus::class, 'property_room_letting_status', 'property_status_id');
    }

    /**
     * Get the PropertyRentFrequency associated with this record.
     */
    public function frequency(): BelongsTo
    {
        return $this->belongsTo(PropertyRentFrequency::class, 'property_room_letting_rent_frequency', 'property_rent_frequency_id');
    }

    /**
     * Get the PropertyRoomLettingSize associated with this record.
     */
    public function size(): BelongsTo
    {
        return $this->belongsTo(PropertyRoomLettingSize::class, 'property_room_letting_size', 'property_room_letting_size_id');
    }

    /**
     * Get the PropertyFloor associated with this record.
     */
    public function floor(): BelongsTo
    {
        return $this->belongsTo(PropertyFloor::class, 'property_room_letting_floor', 'property_floor_id');
    }

    /**
     * Get the PropertyFurnishedStatus associated with this record.
     */
    public function furnished(): BelongsTo
    {
        return $this->belongsTo(PropertyFurnishedStatus::class, 'property_room_letting_furnished', 'property_furnished_status_id');
    }

    /**
     * Get the Gender associated with this record.
     */
    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class, 'property_room_letting_gender', 'gender_id');
    }
}