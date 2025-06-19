<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TenancyInspectionFrequency extends Model
{
    protected $table = 'tenancy_inspection_frequency';
    protected $primaryKey = 'tenancy_inspection_frequency_id';
    public $timestamps = false;

    protected $fillable = [
        'tenancy_inspection_frequency_name',
        'tenancy_inspection_frequency_description',
    ];

    /**
     * Get the tenancies with this inspection frequency.
     */
    public function tenancies(): HasMany
    {
        return $this->hasMany(Tenancy::class, 'tenancy_inspection_frequency', 'tenancy_inspection_frequency_id');
    }
}