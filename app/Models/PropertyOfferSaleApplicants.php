<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyOfferSaleApplicants extends Model
{
    protected $table = 'property_offer_sale_applicants';
    protected $primaryKey = 'property_offer_sale_applicants_id';
    public $timestamps = false;

    protected $fillable = [
        'property_offer_sale_applicants_offer',
        'property_offer_sale_applicants_applicant',
        'property_offer_sale_applicants_date_created',
        'property_offer_sale_applicants_date_updated',
        'property_offer_sale_applicants_created_by',
        'property_offer_sale_applicants_updated_by',
    ];

    protected $dates = [
        'property_offer_sale_applicants_date_created',
        'property_offer_sale_applicants_date_updated',
    ];

    /**
     * Get the property offer that this applicant record belongs to.
     */
    public function offer(): BelongsTo
    {
        return $this->belongsTo(PropertyOfferSale::class, 'property_offer_sale_applicants_offer', 'property_offer_sale_id');
    }

    /**
     * Get the applicant who made the offer.
     */
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'property_offer_sale_applicants_applicant', 'applicant_id');
    }

    /**
     * Get the employee who created this record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_applicants_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_offer_sale_applicants_updated_by', 'employee_id');
    }
}