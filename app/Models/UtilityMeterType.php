<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UtilityMeterType extends Model
{
    protected $table = 'utility_meter_type';
    protected $primaryKey = 'utility_meter_type_id';
    public $timestamps = false;

        protected $fillable = [
        'utility_meter_type_id',
        'utility_meter_type_name',
    ];

    /**
     * Get the utility meters with this type.
     */
    
}