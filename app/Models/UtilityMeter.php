<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UtilityMeter extends Model
{
    protected $table = 'utility_meter';
    protected $primaryKey = 'utility_meter_id';
    public $timestamps = false;

        protected $fillable = [
        'utility_meter_id',
        'utility_meter_property',
        'utility_meter_utility',
        'utility_meter_type',
        'utility_meter_location',
        'utility_meter_notes',
        'utility_meter_provider',
    ];

    protected $casts = [
        'utility_meter_property' => 'integer',
        'utility_meter_utility' => 'integer',
        'utility_meter_type' => 'integer',
        'utility_meter_location' => 'integer',
        'utility_meter_provider' => 'integer',
    ];

    protected $dates = [
        'utility_meter_date_created',
        'utility_meter_date_updated',
    ];

    /**
     * Get the property that owns the meter.
     */
    

    /**
     * Get the utility type of this meter.
     */
    

    /**
     * Get the meter type.
     */
    

    /**
     * Get the meter location.
     */
    

    /**
     * Get the utility provider.
     */
    

    /**
     * Get the employee who created this meter record.
     */
    

    /**
     * Get the employee who updated this meter record.
     */
    

    /**
     * Get the meter readings for this meter.
     */
    // 

    /**
     * Get the Property associated with this record.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'utility_meter_property', 'property_id');
    }

    /**
     * Get the Utility associated with this record.
     */
    public function utility(): BelongsTo
    {
        return $this->belongsTo(Utility::class, 'utility_meter_utility', 'utility_id');
    }

    /**
     * Get the UtilityMeterType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(UtilityMeterType::class, 'utility_meter_type', 'utility_meter_type_id');
    }

    /**
     * Get the UtilityMeterLocation associated with this record.
     */
    public function location(): BelongsTo
    {
        return $this->belongsTo(UtilityMeterLocation::class, 'utility_meter_location', 'utility_meter_location_id');
    }

    /**
     * Get the UtilityProvider associated with this record.
     */
    public function provider(): BelongsTo
    {
        return $this->belongsTo(UtilityProvider::class, 'utility_meter_provider', 'utility_provider_id');
    }
}