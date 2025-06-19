<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UtilityProvider extends Model
{
    protected $table = 'utility_provider';
    protected $primaryKey = 'utility_provider_id';
    public $timestamps = false;

    protected $fillable = [
        'utility_provider_name',
        'utility_provider_description',
        'utility_provider_phone',
        'utility_provider_email',
        'utility_provider_website',
    ];

    /**
     * Get the meters managed by this provider.
     */
    public function meters(): HasMany
    {
        return $this->hasMany(UtilityMeter::class, 'utility_meter_provider', 'utility_provider_id');
    }
}