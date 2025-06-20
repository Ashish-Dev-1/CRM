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
        'interested_applicant_id',
        'interested_applicant_applicant_id',
        'interested_applicant_property',
        'interested_applicant_notes',
        'interested_applicant_status',
        'interested_applicant_status_reason',
        'interested_applicant_date_created',
        'interested_applicant_date_updated',
        'interested_applicant_created_by',
        'interested_applicant_updated_by',
    ];

    protected $casts = [
        'interested_applicant_applicant_id' => 'integer',
        'interested_applicant_property' => 'integer',
        'interested_applicant_status' => 'integer',
        'interested_applicant_date_created' => 'datetime',
        'interested_applicant_date_updated' => 'datetime',
        'interested_applicant_created_by' => 'integer',
        'interested_applicant_updated_by' => 'integer',
    ];

        protected $dates = [
        'interested_applicant_date_created',
        'interested_applicant_date_updated',
    ];

    /**
     * Get the property that the applicant is interested in.
     */
    

    /**
     * Get the applicant who is interested in the property.
     */
    

    /**
     * Get the employee who created this record.
     */
    

    /**
     * Get the employee who updated this record.
     */
    

    /**
     * Get the updates for this interested applicant record.
     */
    

    /**
     * Get the Applicant associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'interested_applicant_applicant_id', 'applicant_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'interested_applicant_property', 'property_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'interested_applicant_created_by', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'interested_applicant_updated_by', 'employee_id');
    }
}