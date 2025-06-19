<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InterestedApplicant extends Model
{
    protected $table = 'interested_applicant';
    protected $primaryKey = 'interested_applicant_id';
    public $timestamps = false;

    protected $fillable = [
        'interested_applicant_property',
        'interested_applicant_applicant',
        'interested_applicant_date',
        'interested_applicant_notes',
        'interested_applicant_date_created',
        'interested_applicant_date_updated',
        'interested_applicant_created_by',
        'interested_applicant_updated_by',
    ];

    protected $dates = [
        'interested_applicant_date',
        'interested_applicant_date_created',
        'interested_applicant_date_updated',
    ];

    /**
     * Get the property that the applicant is interested in.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'interested_applicant_property', 'property_id');
    }

    /**
     * Get the applicant who is interested in the property.
     */
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'interested_applicant_applicant', 'applicant_id');
    }

    /**
     * Get the employee who created this record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'interested_applicant_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'interested_applicant_updated_by', 'employee_id');
    }

    /**
     * Get the updates for this interested applicant record.
     */
    public function updates(): HasMany
    {
        return $this->hasMany(InterestedApplicantUpdate::class, 'interested_applicant_updates_interested_applicant', 'interested_applicant_id');
    }
}