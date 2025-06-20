<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyLandlord extends Model
{
    protected $table = 'property_landlord';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'property_id',
        'landlord_id',
        'landlord_lead',
        'landlord_official',
        'landlord_invoicing',
    ];

    protected $casts = [
        'property_id' => 'integer',
        'landlord_id' => 'integer',
        'landlord_lead' => 'boolean',
        'landlord_official' => 'integer',
        'landlord_invoicing' => 'integer',
    ];

    protected $dates = [
        'property_landlord_date_created',
        'property_landlord_date_updated',
    ];

    /**
     * Get the property associated with this record.
     */
    

    /**
     * Get the landlord associated with this record.
     */
    

    /**
     * Get the employee who created this record.
     */
    

    /**
     * Get the employee who updated this record.
     */
    

    /**
     * Get the Landlord associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Landlord::class, 'property_landlord_id', 'landlord_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}