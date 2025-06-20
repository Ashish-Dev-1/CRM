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
        'utility_meter_location_id',
        'utility_meter_location_name',
    ];

    /**
     * Get the meters at this location.
     */
    
}