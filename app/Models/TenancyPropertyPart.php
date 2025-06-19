<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TenancyPropertyPart extends Model
{
    protected $table = 'tenancy_property_part';
    protected $primaryKey = 'tenancy_property_part_id';
    public $timestamps = false;

    protected $fillable = [
        'tenancy_property_part_name',
        'tenancy_property_part_description',
    ];

    /**
     * Get the tenancies for this property part.
     */
    public function tenancies(): HasMany
    {
        return $this->hasMany(Tenancy::class, 'tenancy_property_part', 'tenancy_property_part_id');
    }
}