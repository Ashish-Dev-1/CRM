<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyVendor extends Model
{
    protected $table = 'property_vendor';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'property_id',
        'vendor_id',
        'vendor_lead',
        'vendor_official',
    ];

    protected $casts = [
        'property_id' => 'integer',
        'vendor_id' => 'integer',
        'vendor_lead' => 'integer',
        'vendor_official' => 'integer',
    ];

    protected $dates = [
        'property_vendor_date_created',
        'property_vendor_date_updated',
    ];

    /**
     * Get the property associated with this record.
     */
    

    /**
     * Get the vendor associated with this record.
     */
    

    /**
     * Get the employee who created this record.
     */
    

    /**
     * Get the employee who updated this record.
     */
    

    /**
     * Get the Vendor associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Vendor::class, 'property_vendor_id', 'vendor_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}