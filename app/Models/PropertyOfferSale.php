<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyOfferSale extends Model
{
    protected $table = 'property_offer_sale';
    
    public $timestamps = false;

        protected $fillable = [
        'property_offer_sale_property',
        'property_offer_sale_price',
        'property_offer_sale_finance',
        'property_offer_sale_mortgage_deposit',
        'property_offer_sale_type',
        'property_offer_sale_survey',
        'property_offer_sale_htb',
        'property_offer_sale_htb_approved',
        'property_offer_sale_chain',
        'property_offer_sale_status',
        'property_offer_sale_status_reason',
        'property_offer_sale_notes',
        'property_offer_sale_notes_private',
        'property_offer_sale_employee',
        'property_offer_sale_referral_solicitor',
        'property_offer_sale_referral_solicitor_notes',
        'property_offer_sale_referral_surveyor',
        'property_offer_sale_referral_surveyor_notes',
        'property_offer_sale_referral_mortgage',
        'property_offer_sale_referral_mortgage_notes',
        'property_offer_sale_referral_valuation',
        'property_offer_sale_referral_valuation_notes',
        'property_offer_sale_viewings',
        'property_offer_sale_revised_offer_id',
        'property_offer_sale_date_created',
        'property_offer_sale_date_updated',
        'property_offer_sale_created_by',
        'property_offer_sale_updated_by',
    ];

    protected $casts = [
        'property_offer_sale_property' => 'integer',
        'property_offer_sale_price' => 'decimal:2',
        'property_offer_sale_finance' => 'integer',
        'property_offer_sale_mortgage_deposit' => 'integer',
        'property_offer_sale_type' => 'integer',
        'property_offer_sale_survey' => 'integer',
        'property_offer_sale_htb' => 'integer',
        'property_offer_sale_htb_approved' => 'integer',
        'property_offer_sale_chain' => 'integer',
        'property_offer_sale_status' => 'integer',
        'property_offer_sale_employee' => 'integer',
        'property_offer_sale_referral_solicitor' => 'integer',
        'property_offer_sale_referral_surveyor' => 'integer',
        'property_offer_sale_referral_mortgage' => 'integer',
        'property_offer_sale_referral_valuation' => 'integer',
        'property_offer_sale_viewings' => 'integer',
        'property_offer_sale_revised_offer_id' => 'integer',
        'property_offer_sale_date_created' => 'datetime',
        'property_offer_sale_date_updated' => 'datetime',
        'property_offer_sale_created_by' => 'integer',
        'property_offer_sale_updated_by' => 'integer',
    ];

        protected $dates = [
        'property_offer_sale_date_created',
        'property_offer_sale_date_updated',
    ];

    /**
     * Get the property that the offer is for.
     */

    /**
     * Get the status of the offer.
     */

    /**
     * Get the type of the offer.
     */

    /**
     * Get the finance type for the offer.
     */

    /**
     * Get the employee who created the offer.
     */

    /**
     * Get the employee who updated the offer.
     */

    /**
     * Get the applicants associated with the offer.
     */

    /**
     * Get the attachments for the offer.
     */

    /**
     * Get the chain information for the offer.
     */

    /**
     * Get the status log for the offer.
     */

    /**
     * Get the updates for the offer.
     */

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_created_by', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_employee', 'employee_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_offer_sale_property', 'property_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_updated_by', 'employee_id');
    }

    /**
     * Get the SaleFinance associated with this record.
     */
    public function finance(): BelongsTo
    {
        return $this->belongsTo(SaleFinance::class, 'property_offer_sale_finance', 'sale_finance_id');
    }

    /**
     * Get the PropertyOfferSaleType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSaleType::class, 'property_offer_sale_type', 'property_offer_sale_type_id');
    }

    /**
     * Get the SurveyStatus associated with this record.
     */
    public function survey(): BelongsTo
    {
        return $this->belongsTo(SurveyStatus::class, 'property_offer_sale_survey', 'survey_status_id');
    }

    /**
     * Get the PropertyOfferStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferStatus::class, 'property_offer_sale_status', 'property_offer_status_id');
    }

    /**
     * Get the PropertyOfferSale associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_revised_offer_id', 'property_offer_sale_id');
    }
}