<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyLandlord extends Model
{
    protected $table = 'property_landlord';
    protected $primaryKey = 'property_landlord_id';
    public $timestamps = false;

    protected $fillable = [
        'property_landlord_property',
        'property_landlord_landlord',
        'property_landlord_lead',
        'property_landlord_percentage_ownership',
        'property_landlord_date_created',
        'property_landlord_date_updated',
        'property_landlord_created_by',
        'property_landlord_updated_by',
    ];

    protected $dates = [
        'property_landlord_date_created',
        'property_landlord_date_updated',
    ];

    /**
     * Get the property associated with this record.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_landlord_property', 'property_id');
    }

    /**
     * Get the landlord associated with this record.
     */
    public function landlord(): BelongsTo
    {
        return $this->belongsTo(Landlord::class, 'property_landlord_landlord', 'landlord_id');
    }

    /**
     * Get the employee who created this record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_landlord_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_landlord_updated_by', 'employee_id');
    }
}