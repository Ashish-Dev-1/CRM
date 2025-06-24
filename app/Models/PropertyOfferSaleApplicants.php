<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyOfferSaleApplicants extends Model
{
    protected $table = 'property_offer_sale_applicants';
    
    public $timestamps = false;

        protected $fillable = [
        'property_offer_sale_id',
        'applicant_id',
    ];

    protected $casts = [
        'property_offer_sale_id' => 'integer',
        'applicant_id' => 'integer',
    ];

    protected $dates = [
        'property_offer_sale_applicants_date_created',
        'property_offer_sale_applicants_date_updated',
    ];

    /**
     * Get the property offer that this applicant record belongs to.
     */

    /**
     * Get the applicant who made the offer.
     */

    /**
     * Get the employee who created this record.
     */

    /**
     * Get the employee who updated this record.
     */

    /**
     * Get the PropertyOfferSale associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_id', 'property_offer_sale_id');
    }

    /**
     * Get the Applicant associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'applicant_id', 'applicant_id');
    }
}