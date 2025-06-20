<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantUpdates extends Model
{
    //

    /**
     * Get the Applicant associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'applicant_updates_applicant_id', 'applicant_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'applicant_updates_created_by', 'employee_id');
    }
}
