<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyOfferSaleChain extends Model
{
    //

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_offer_buyer_property_id', 'property_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_chain_created_by', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_chain_updated_by', 'employee_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_offer_vendor_property_id', 'property_id');
    }

    /**
     * Get the PropertyOfferSale associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_id', 'property_offer_sale_id');
    }

    /**
     * Get the PropertyOfferSaleChainPosition associated with this record.
     */
    public function position(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSaleChainPosition::class, 'property_offer_sale_chain_position', 'property_offer_sale_chain_position_id');
    }

    /**
     * Get the PropertyOfferSaleChainStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSaleChainStatus::class, 'property_offer_sale_chain_status', 'property_offer_sale_chain_status_id');
    }
}
