<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantRequirementProperties extends Model
{
    //

    /**
     * Get the ApplicantRequirement associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(ApplicantRequirement::class, 'ar_id', 'ar_id');
    }

    /**
     * Get the Applicant associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'applicant_id', 'applicant_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}
