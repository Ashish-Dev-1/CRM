<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicantRequirementPropertySubtype extends Model
{
    protected $table = 'applicant_requirement_property_subtype';
    protected $primaryKey = 'arps_id';
    public $timestamps = false;

    protected $fillable = [
        'arps_applicant_requirement',
        'arps_property_type',
        'arps_date_created',
        'arps_date_updated',
        'arps_created_by',
        'arps_updated_by',
    ];

    protected $dates = [
        'arps_date_created',
        'arps_date_updated',
    ];

    /**
     * Get the applicant requirement that this property subtype belongs to.
     */
    public function applicantRequirement(): BelongsTo
    {
        return $this->belongsTo(ApplicantRequirement::class, 'arps_applicant_requirement', 'ar_id');
    }

    /**
     * Get the property type that this requirement relates to.
     */
    public function propertyType(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class, 'arps_property_type', 'property_type_id');
    }

    /**
     * Get the employee who created this requirement property subtype.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'arps_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this requirement property subtype.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'arps_updated_by', 'employee_id');
    }
}