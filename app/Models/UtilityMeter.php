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
        'utility_meter_property',
        'utility_meter_utility',
        'utility_meter_number',
        'utility_meter_type',
        'utility_meter_location',
        'utility_meter_provider',
        'utility_meter_notes',
        'utility_meter_date_created',
        'utility_meter_date_updated',
        'utility_meter_created_by',
        'utility_meter_updated_by',
    ];

    protected $dates = [
        'utility_meter_date_created',
        'utility_meter_date_updated',
    ];

    /**
     * Get the property that owns the meter.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'utility_meter_property', 'property_id');
    }

    /**
     * Get the utility type of this meter.
     */
    public function utility(): BelongsTo
    {
        return $this->belongsTo(Utility::class, 'utility_meter_utility', 'utility_id');
    }

    /**
     * Get the meter type.
     */
    public function meterType(): BelongsTo
    {
        return $this->belongsTo(UtilityMeterType::class, 'utility_meter_type', 'utility_meter_type_id');
    }

    /**
     * Get the meter location.
     */
    public function meterLocation(): BelongsTo
    {
        return $this->belongsTo(UtilityMeterLocation::class, 'utility_meter_location', 'utility_meter_location_id');
    }

    /**
     * Get the utility provider.
     */
    public function provider(): BelongsTo
    {
        return $this->belongsTo(UtilityProvider::class, 'utility_meter_provider', 'utility_provider_id');
    }

    /**
     * Get the employee who created this meter record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'utility_meter_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this meter record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'utility_meter_updated_by', 'employee_id');
    }

    /**
     * Get the meter readings for this meter.
     */
    // public function meterReadings(): HasMany
    // {
    //     return $this->hasMany(UtilityMeterReading::class, 'utility_meter_reading_meter', 'utility_meter_id');
    // }
}