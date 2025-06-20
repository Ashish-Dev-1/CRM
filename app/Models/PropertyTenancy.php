<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyTenancy extends Model
{
    protected $table = 'property_tenancy';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'property_id',
        'property_tenancy_description',
        'property_tenancy_tenant',
        'property_tenancy_bedrooms',
        'property_tenancy_size',
        'property_tenancy_size_unit',
        'property_tenancy_rent',
        'property_tenancy_rent_frequency',
        'property_tenancy_erv',
        'property_tenancy_erv_frequency',
        'property_tenancy_lease_type',
        'property_tenancy_lease_start_date',
        'property_tenancy_lease_expiry_date',
        'property_tenancy_public_notes',
        'property_tenancy_sort',
    ];

    protected $casts = [
        'property_id' => 'integer',
        'property_tenancy_bedrooms' => 'integer',
        'property_tenancy_size' => 'decimal:2',
        'property_tenancy_size_unit' => 'integer',
        'property_tenancy_rent' => 'decimal:2',
        'property_tenancy_rent_frequency' => 'integer',
        'property_tenancy_erv' => 'decimal:2',
        'property_tenancy_erv_frequency' => 'integer',
        'property_tenancy_lease_type' => 'integer',
        'property_tenancy_lease_start_date' => 'date',
        'property_tenancy_lease_expiry_date' => 'date',
        'property_tenancy_sort' => 'integer',
    ];

        protected $dates = [
        'property_tenancy_lease_start_date',
        'property_tenancy_lease_expiry_date',
    ];

    /**
     * Get the property that this tenancy details belong to.
     */
    

    /**
     * Get the ERV (Estimated Rental Value) frequency for this tenancy.
     */
    

    /**
     * Get the employee who created this tenancy details.
     */
    

    /**
     * Get the employee who updated this tenancy details.
     */
    

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }

    /**
     * Get the PropertyAreaUnit associated with this record.
     */
    public function unit(): BelongsTo
    {
        return $this->belongsTo(PropertyAreaUnit::class, 'property_tenancy_size_unit', 'property_area_unit_id');
    }

    /**
     * Get the TenancyRentFrequency associated with this record.
     */
    public function frequency(): BelongsTo
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'property_tenancy_rent_frequency', 'tenancy_rent_frequency_id');
    }

    /**
     * Get the TenancyRentFrequency associated with this record.
     */
    public function frequency(): BelongsTo
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'property_tenancy_erv_frequency', 'tenancy_rent_frequency_id');
    }

    /**
     * Get the LeaseType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(LeaseType::class, 'property_tenancy_lease_type', 'lease_type_id');
    }
}