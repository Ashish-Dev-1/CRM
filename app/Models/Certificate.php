<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Certificate extends Model
{
    protected $table = 'certificate';
    protected $primaryKey = 'certificate_id';
    public $timestamps = false;

        protected $fillable = [
        'certificate_id',
        'certificate_property',
        'certificate_type',
        'certificate_reference',
        'certificate_link',
        'certificate_rating',
        'certificate_start_date',
        'certificate_expiry_date',
        'certificate_notes',
        'certificate_notes_private',
        'certificate_renewal_contractor',
        'certificate_renewal_instructed',
        'certificate_renewal_last_instructed',
        'certificate_renewal_instructed_by',
        'certificate_date_created',
        'certificate_created_by',
    ];

    protected $casts = [
        'certificate_id' => 'integer',
        'certificate_property' => 'integer',
        'certificate_type' => 'integer',
        'certificate_start_date' => 'date',
        'certificate_expiry_date' => 'date',
        'certificate_renewal_contractor' => 'integer',
        'certificate_renewal_instructed' => 'integer',
        'certificate_renewal_last_instructed' => 'datetime',
        'certificate_renewal_instructed_by' => 'integer',
        'certificate_date_created' => 'datetime',
        'certificate_created_by' => 'integer',
    ];

        protected $dates = [
        'certificate_start_date',
        'certificate_expiry_date',
        'certificate_renewal_last_instructed',
        'certificate_date_created',
    ];

    /**
     * Get the property that the certificate belongs to.
     */
    

    /**
     * Get the type of the certificate.
     */
    

    /**
     * Get the contractor for the certificate.
     */
    

    /**
     * Get the status of the certificate.
     */
    

    /**
     * Get the initial status of the certificate.
     */
    

    /**
     * Get the employee who created the certificate.
     */
    

    /**
     * Get the employee who updated the certificate.
     */
    

    /**
     * Get the files associated with the certificate.
     */
    

    /**
     * Get the updates for the certificate.
     */
    

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'certificate_created_by', 'employee_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'certificate_property', 'property_id');
    }

    /**
     * Get the CalendarEventType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(CalendarEventType::class, 'certificate_type', 'calendar_event_type_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function contractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'certificate_renewal_contractor', 'directory_id');
    }
}