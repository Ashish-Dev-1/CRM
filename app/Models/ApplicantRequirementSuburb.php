<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicantRequirementSuburb extends Model
{
    protected $table = 'applicant_requirement_suburb';
    protected $primaryKey = 'ars_id';
    public $timestamps = false;

    protected $fillable = [
        'ars_applicant_requirement',
        'ars_suburb',
        'ars_date_created',
        'ars_date_updated',
        'ars_created_by',
        'ars_updated_by',
    ];

    protected $dates = [
        'ars_date_created',
        'ars_date_updated',
    ];

    /**
     * Get the applicant requirement that this suburb belongs to.
     */
    public function applicantRequirement(): BelongsTo
    {
        return $this->belongsTo(ApplicantRequirement::class, 'ars_applicant_requirement', 'ar_id');
    }

    /**
     * Get the suburb that this requirement relates to.
     */
    public function suburb(): BelongsTo
    {
        return $this->belongsTo(Suburb::class, 'ars_suburb', 'suburb_id');
    }

    /**
     * Get the employee who created this requirement suburb.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'ars_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this requirement suburb.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'ars_updated_by', 'employee_id');
    }
}