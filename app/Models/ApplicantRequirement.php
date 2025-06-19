<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ApplicantRequirement extends Model
{
    protected $table = 'applicant_requirement';
    protected $primaryKey = 'ar_id';
    public $timestamps = false;

    protected $fillable = [
        'ar_applicant',
        'ar_token',
        'ar_customer_type',
        'ar_price_min',
        'ar_price_max',
        'ar_rent_min',
        'ar_rent_max',
        'ar_rent_frequency',
        'ar_bedrooms_min',
        'ar_bedrooms_max',
        // ...other fields...
    ];

    protected $dates = [
        'ar_date_created',
        'ar_date_updated',
    ];

    /**
     * Get the applicant that owns the requirement.
     */
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'ar_applicant', 'applicant_id');
    }

    /**
     * Get the customer type for the requirement.
     */
    public function customerType(): BelongsTo
    {
        return $this->belongsTo(CustomerType::class, 'ar_customer_type', 'customer_type_id');
    }

    /**
     * Get the rent frequency for the requirement.
     */
    public function rentFrequency(): BelongsTo
    {
        return $this->belongsTo(PropertyRentFrequency::class, 'ar_rent_frequency', 'property_rent_frequency_id');
    }

    /**
     * Get the employee who created the requirement.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'ar_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the requirement.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'ar_updated_by', 'employee_id');
    }

    /**
     * Get the property subtypes for the requirement.
     */
    public function propertySubtypes(): HasMany
    {
        return $this->hasMany(ApplicantRequirementPropertySubtype::class, 'arps_applicant_requirement', 'ar_id');
    }

    /**
     * Get the suburbs for the requirement.
     */
    public function suburbs(): HasMany
    {
        return $this->hasMany(ApplicantRequirementSuburb::class, 'ars_applicant_requirement', 'ar_id');
    }

    /**
     * Get the properties that match the requirement.
     */
    public function matchedProperties(): HasMany
    {
        return $this->hasMany(ApplicantRequirementProperties::class, 'arp_applicant_requirement', 'ar_id');
    }

    /**
     * Get the feedback on properties that match the requirement.
     */
    public function propertyFeedback(): HasMany
    {
        return $this->hasMany(ApplicantRequirementFeedback::class, 'applicant_requirement_feedback_requirement', 'ar_id');
    }
}