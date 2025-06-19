<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InterestedApplicantUpdate extends Model
{
    protected $table = 'interested_applicant_updates';
    protected $primaryKey = 'interested_applicant_updates_id';
    public $timestamps = false;

    protected $fillable = [
        'interested_applicant_updates_interested_applicant',
        'interested_applicant_updates_date',
        'interested_applicant_updates_employee',
        'interested_applicant_updates_notes',
    ];

    protected $dates = [
        'interested_applicant_updates_date',
    ];

    /**
     * Get the interested applicant record that this update belongs to.
     */
    public function interestedApplicant(): BelongsTo
    {
        return $this->belongsTo(InterestedApplicant::class, 'interested_applicant_updates_interested_applicant', 'interested_applicant_id');
    }

    /**
     * Get the employee who made this update.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'interested_applicant_updates_employee', 'employee_id');
    }
}