<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyOfferSale extends Model
{
    protected $table = 'property_offer_sale';
    protected $primaryKey = 'property_offer_sale_id';
    public $timestamps = false;

    protected $fillable = [
        'property_offer_sale_property',
        'property_offer_sale_amount',
        'property_offer_sale_status',
        'property_offer_sale_date',
        'property_offer_sale_type',
        'property_offer_sale_finance',
        // ...other fields...
    ];

    protected $dates = [
        'property_offer_sale_date',
        'property_offer_sale_date_created',
        'property_offer_sale_date_updated',
    ];

    /**
     * Get the property that the offer is for.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_offer_sale_property', 'property_id');
    }

    /**
     * Get the status of the offer.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferStatus::class, 'property_offer_sale_status', 'property_offer_status_id');
    }

    /**
     * Get the type of the offer.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSaleType::class, 'property_offer_sale_type', 'property_offer_sale_type_id');
    }

    /**
     * Get the finance type for the offer.
     */
    public function finance(): BelongsTo
    {
        return $this->belongsTo(SaleFinance::class, 'property_offer_sale_finance', 'sale_finance_id');
    }

    /**
     * Get the employee who created the offer.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the offer.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_updated_by', 'employee_id');
    }

    /**
     * Get the applicants associated with the offer.
     */
    public function applicants(): HasMany
    {
        return $this->hasMany(PropertyOfferSaleApplicants::class, 'property_offer_sale_applicants_offer', 'property_offer_sale_id');
    }

    /**
     * Get the attachments for the offer.
     */
    public function attachments(): HasMany
    {
        return $this->hasMany(PropertyOfferSaleAttachments::class, 'property_offer_sale_attachments_offer', 'property_offer_sale_id');
    }

    /**
     * Get the chain information for the offer.
     */
    public function chain(): HasMany
    {
        return $this->hasMany(PropertyOfferSaleChain::class, 'property_offer_sale_chain_offer', 'property_offer_sale_id');
    }

    /**
     * Get the status log for the offer.
     */
    public function statusLog(): HasMany
    {
        return $this->hasMany(PropertyOfferSaleLogStatus::class, 'property_offer_sale_log_status_offer', 'property_offer_sale_id');
    }

    /**
     * Get the updates for the offer.
     */
    public function updates(): HasMany
    {
        return $this->hasMany(PropertyOfferSaleUpdates::class, 'property_offer_sale_updates_offer', 'property_offer_sale_id');
    }
}