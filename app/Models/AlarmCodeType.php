<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AlarmCodeType extends Model
{
    protected $table = 'alarm_code_type';
    protected $primaryKey = 'alarm_code_type_id';
    public $timestamps = false;

    protected $fillable = [
        'alarm_code_type_name',
        'alarm_code_type_description',
    ];

    /**
     * Get the alarm codes with this type.
     */
    public function alarmCodes(): HasMany
    {
        return $this->hasMany(AlarmCode::class, 'alarm_code_type', 'alarm_code_type_id');
    }

    /**
     * Get the development alarm codes with this type.
     */
    public function developmentAlarmCodes(): HasMany
    {
        return $this->hasMany(AlarmCodeDevelopment::class, 'alarm_code_type', 'alarm_code_type_id');
    }
}