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
        'utility_meter_type_name',
        'utility_meter_type_description',
    ];

    /**
     * Get the utility meters with this type.
     */
    public function meters(): HasMany
    {
        return $this->hasMany(UtilityMeter::class, 'utility_meter_type', 'utility_meter_type_id');
    }
}