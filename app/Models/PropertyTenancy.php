<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyTenancy extends Model
{
    protected $table = 'property_tenancy';
    protected $primaryKey = 'property_tenancy_id';
    public $timestamps = false;

    protected $fillable = [
        'property_tenancy_property',
        'property_tenancy_name',
        'property_tenancy_lease_start',
        'property_tenancy_lease_end',
        'property_tenancy_lease_term',
        'property_tenancy_lease_break_clause',
        'property_tenancy_lease_notice_period',
        'property_tenancy_ground_rent',
        'property_tenancy_service_charge',
        'property_tenancy_erv',
        'property_tenancy_erv_frequency',
        'property_tenancy_date_created',
        'property_tenancy_date_updated',
        'property_tenancy_created_by',
        'property_tenancy_updated_by',
    ];

    protected $dates = [
        'property_tenancy_lease_start',
        'property_tenancy_lease_end',
        'property_tenancy_date_created',
        'property_tenancy_date_updated',
    ];

    /**
     * Get the property that this tenancy details belong to.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_tenancy_property', 'property_id');
    }

    /**
     * Get the ERV (Estimated Rental Value) frequency for this tenancy.
     */
    public function ervFrequency(): BelongsTo
    {
        return $this->belongsTo(PropertyRentFrequency::class, 'property_tenancy_erv_frequency', 'property_rent_frequency_id');
    }

    /**
     * Get the employee who created this tenancy details.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_tenancy_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this tenancy details.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_tenancy_updated_by', 'employee_id');
    }
}