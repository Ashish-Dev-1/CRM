<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Applicant extends Model
{
    protected $table = 'applicant';
    protected $primaryKey = 'applicant_id';
    public $timestamps = false;

    protected $fillable = [
        'applicant_token',
        'applicant_title',
        'applicant_first_name',
        'applicant_surname',
        'applicant_email',
        'applicant_phone_mobile',
        // ...other fields...
    ];

    protected $dates = [
        'applicant_date_created',
        'applicant_date_updated',
    ];

    /**
     * Get the title of the applicant.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'applicant_title', 'title_id');
    }

    /**
     * Get the country of the applicant.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'applicant_country', 'country_id');
    }

    /**
     * Get the lead source of the applicant.
     */
    public function leadSource(): BelongsTo
    {
        return $this->belongsTo(ApplicantLeadSource::class, 'applicant_lead_source', 'applicant_lead_source_id');
    }

    /**
     * Get the branch associated with the applicant.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'applicant_branch', 'branch_id');
    }

    /**
     * Get the chain status of the applicant.
     */
    public function chainStatus(): BelongsTo
    {
        return $this->belongsTo(ApplicantChainStatus::class, 'applicant_chain_status', 'applicant_chain_status_id');
    }

    /**
     * Get the employee who created the applicant.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the applicant.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_updated_by', 'employee_id');
    }

    /**
     * Get the requirements for the applicant.
     */
    public function requirements(): HasMany
    {
        return $this->hasMany(ApplicantRequirement::class, 'ar_applicant', 'applicant_id');
    }

    /**
     * Get the updates for the applicant.
     */
    public function updates(): HasMany
    {
        return $this->hasMany(ApplicantUpdates::class, 'applicant_updates_applicant', 'applicant_id');
    }

    /**
     * Get the properties the applicant is interested in.
     */
    public function interestedProperties(): HasMany
    {
        return $this->hasMany(InterestedApplicant::class, 'interested_applicant_applicant', 'applicant_id');
    }
}