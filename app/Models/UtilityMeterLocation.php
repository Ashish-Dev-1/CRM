<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UtilityMeterLocation extends Model
{
    protected $table = 'utility_meter_location';
    protected $primaryKey = 'utility_meter_location_id';
    public $timestamps = false;

    protected $fillable = [
        'utility_meter_location_name',
        'utility_meter_location_description',
    ];

    /**
     * Get the meters at this location.
     */
    public function meters(): HasMany
    {
        return $this->hasMany(UtilityMeter::class, 'utility_meter_location', 'utility_meter_location_id');
    }
}