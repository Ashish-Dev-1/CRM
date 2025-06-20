<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicantRequirementFeedback extends Model
{
    protected $table = 'applicant_requirement_feedback';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'applicant_requirement_feedback_ar_id',
        'applicant_requirement_feedback_arp_id',
        'applicant_requirement_feedback_public_notes',
        'applicant_requirement_feedback_ptp',
        'applicant_requirement_feedback_private_notes',
        'applicant_requirement_feedback_next_review_date',
        'applicant_requirement_feedback_date_created',
        'applicant_requirement_feedback_date_updated',
        'applicant_requirement_feedback_created_by',
        'applicant_requirement_feedback_updated_by',
    ];

    protected $casts = [
        'applicant_requirement_feedback_ar_id' => 'integer',
        'applicant_requirement_feedback_arp_id' => 'integer',
        'applicant_requirement_feedback_ptp' => 'integer',
        'applicant_requirement_feedback_date_created' => 'datetime',
        'applicant_requirement_feedback_date_updated' => 'datetime',
        'applicant_requirement_feedback_created_by' => 'integer',
        'applicant_requirement_feedback_updated_by' => 'integer',
    ];

        protected $dates = [
        'applicant_requirement_feedback_date_created',
        'applicant_requirement_feedback_date_updated',
    ];

    /**
     * Get the applicant requirement that this feedback belongs to.
     */
    

    /**
     * Get the property that this feedback is about.
     */
    

    /**
     * Get the employee who arranged this feedback.
     */
    

    /**
     * Get the employee who provided this feedback.
     */
    

    /**
     * Get the employee who created this feedback.
     */
    

    /**
     * Get the employee who updated this feedback.
     */
    

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_requirement_feedback_created_by', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_requirement_feedback_updated_by', 'employee_id');
    }

    /**
     * Get the ApplicantRequirementProperties associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(ApplicantRequirementProperties::class, 'applicant_requirement_feedback_arp_id', 'arp_id');
    }

    /**
     * Get the ApplicantRequirement associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(ApplicantRequirement::class, 'applicant_requirement_feedback_ar_id', 'ar_id');
    }
}