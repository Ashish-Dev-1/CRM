<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Utility extends Model
{
    protected $table = 'utility';
    protected $primaryKey = 'utility_id';
    public $timestamps = false;

    protected $fillable = [
        'utility_name',
        'utility_description',
    ];

    /**
     * Get the meters for this utility.
     */
    public function meters(): HasMany
    {
        return $this->hasMany(UtilityMeter::class, 'utility_meter_utility', 'utility_id');
    }
}