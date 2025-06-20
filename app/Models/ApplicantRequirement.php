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
        'ar_token',
        'ar_active',
        'ar_applicant_id',
        'ar_property_category',
        'ar_property_availability',
        'ar_property_type',
        'ar_property_min_price',
        'ar_property_max_price',
        'ar_property_min_bedrooms',
        'ar_property_max_bedrooms',
        'ar_property_furnished',
        'ar_property_shared',
        'ar_property_student',
        'ar_position',
        'ar_notes',
        'ar_branch',
        'ar_date_created',
        'ar_date_updated',
        'ar_created_by',
        'ar_updated_by',
    ];

    protected $dates = [
        'ar_date_created',
        'ar_date_updated',
    ];

    /**
     * Get the applicant associated with this requirement.
     */
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'ar_applicant_id', 'applicant_id');
    }

    /**
     * Get the property category for this requirement.
     */
    public function propertyCategory(): BelongsTo
    {
        return $this->belongsTo(PropertyCategory::class, 'ar_property_category', 'property_category_id');
    }

    /**
     * Get the property availability for this requirement.
     */
    public function propertyAvailability(): BelongsTo
    {
        return $this->belongsTo(PropertyAvailability::class, 'ar_property_availability', 'property_availability_id');
    }

    /**
     * Get the property type for this requirement.
     */
    public function propertyType(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class, 'ar_property_type', 'property_type_id');
    }

    /**
     * Get the furnished status for this requirement.
     */
    public function furnishedStatus(): BelongsTo
    {
        return $this->belongsTo(PropertyFurnishedStatus::class, 'ar_property_furnished', 'property_furnished_status_id');
    }

    /**
     * Get the branch associated with this requirement.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'ar_branch', 'branch_id');
    }

    /**
     * Get the employee who created this requirement.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'ar_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this requirement.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'ar_updated_by', 'employee_id');
    }

    /**
     * Get the properties linked to this requirement.
     */
    public function properties(): HasMany
    {
        return $this->hasMany(ApplicantRequirementProperties::class, 'arp_requirement', 'ar_id');
    }

    /**
     * Get the property subtypes linked to this requirement.
     */
    public function propertySubtypes(): HasMany
    {
        return $this->hasMany(ApplicantRequirementPropertySubtype::class, 'arps_requirement', 'ar_id');
    }

    /**
     * Get the suburbs linked to this requirement.
     */
    public function suburbs(): HasMany
    {
        return $this->hasMany(ApplicantRequirementSuburb::class, 'ars_requirement', 'ar_id');
    }

    /**
     * Get the feedback for this requirement.
     */
    public function feedback(): HasMany
    {
        return $this->hasMany(ApplicantRequirementFeedback::class, 'applicant_requirement_feedback_requirement', 'ar_id');
    }
}