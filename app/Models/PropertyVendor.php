<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyVendor extends Model
{
    protected $table = 'property_vendor';
    protected $primaryKey = 'property_vendor_id';
    public $timestamps = false;

    protected $fillable = [
        'property_vendor_property',
        'property_vendor_vendor',
        'property_vendor_lead',
        'property_vendor_percentage_ownership',
        'property_vendor_date_created',
        'property_vendor_date_updated',
        'property_vendor_created_by',
        'property_vendor_updated_by',
    ];

    protected $dates = [
        'property_vendor_date_created',
        'property_vendor_date_updated',
    ];

    /**
     * Get the property associated with this record.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_vendor_property', 'property_id');
    }

    /**
     * Get the vendor associated with this record.
     */
    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class, 'property_vendor_vendor', 'vendor_id');
    }

    /**
     * Get the employee who created this record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_vendor_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_vendor_updated_by', 'employee_id');
    }
}