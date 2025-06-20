<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferSaleUpdates extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_updates_created_by', 'employee_id');
    }

    /**
     * Get the PropertyOfferSale associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_updates_property_offer_sale_id', 'property_offer_sale_id');
    }
}
