<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyRoomLetting extends Model
{
    protected $table = 'property_room_letting';
    protected $primaryKey = 'property_room_letting_id';
    public $timestamps = false;

    protected $fillable = [
        'property_room_letting_property_room',
        'property_room_letting_name',
        'property_room_letting_rent',
        'property_room_letting_rent_frequency',
        'property_room_letting_size',
        'property_room_letting_preferred_gender',
        'property_room_letting_available_date',
        'property_room_letting_minimum_tenancy_length',
        'property_room_letting_maximum_tenancy_length',
        'property_room_letting_status',
        'property_room_letting_date_created',
        'property_room_letting_date_updated',
        'property_room_letting_created_by',
        'property_room_letting_updated_by',
    ];

    protected $dates = [
        'property_room_letting_available_date',
        'property_room_letting_date_created',
        'property_room_letting_date_updated',
    ];

    /**
     * Get the property room that this letting belongs to.
     */
    public function propertyRoom(): BelongsTo
    {
        return $this->belongsTo(PropertyRoom::class, 'property_room_letting_property_room', 'property_room_id');
    }

    /**
     * Get the rent frequency for this letting.
     */
    public function rentFrequency(): BelongsTo
    {
        return $this->belongsTo(PropertyRentFrequency::class, 'property_room_letting_rent_frequency', 'property_rent_frequency_id');
    }

    /**
     * Get the size type for this letting.
     */
    public function size(): BelongsTo
    {
        return $this->belongsTo(PropertyRoomLettingSize::class, 'property_room_letting_size', 'property_room_letting_size_id');
    }

    /**
     * Get the preferred gender for this letting.
     */
    public function preferredGender(): BelongsTo
    {
        return $this->belongsTo(Gender::class, 'property_room_letting_preferred_gender', 'gender_id');
    }

    /**
     * Get the employee who created this letting.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_room_letting_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this letting.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_room_letting_updated_by', 'employee_id');
    }
}