<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferSaleLogStatus extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_updated_by', 'employee_id');
    }

    /**
     * Get the PropertyOfferSale associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_id', 'property_offer_sale_id');
    }

    /**
     * Get the PropertyOfferStatus associated with this record.
     */
    public function old(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferStatus::class, 'property_offer_sale_status_old', 'property_offer_status_id');
    }

    /**
     * Get the PropertyOfferStatus associated with this record.
     */
    public function new(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferStatus::class, 'property_offer_sale_status_new', 'property_offer_status_id');
    }
}
