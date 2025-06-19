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
        'certificate_token',
        'certificate_property',
        'certificate_type',
        'certificate_reference',
        'certificate_start_date',
        'certificate_expiry_date',
        'certificate_contractor',
        // ...other fields...
    ];

    protected $dates = [
        'certificate_start_date',
        'certificate_expiry_date',
        'certificate_date_created',
        'certificate_date_updated',
    ];

    /**
     * Get the property that the certificate belongs to.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'certificate_property', 'property_id');
    }

    /**
     * Get the type of the certificate.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(CertificateType::class, 'certificate_type', 'certificate_type_id');
    }

    /**
     * Get the contractor for the certificate.
     */
    public function contractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'certificate_contractor', 'directory_id');
    }

    /**
     * Get the status of the certificate.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(CertificateStatus::class, 'certificate_status', 'certificate_status_id');
    }

    /**
     * Get the initial status of the certificate.
     */
    public function initialStatus(): BelongsTo
    {
        return $this->belongsTo(CertificateInitialStatus::class, 'certificate_initial_status', 'certificate_initial_status_id');
    }

    /**
     * Get the employee who created the certificate.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'certificate_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the certificate.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'certificate_updated_by', 'employee_id');
    }

    /**
     * Get the files associated with the certificate.
     */
    public function files(): HasMany
    {
        return $this->hasMany(CertificateFile::class, 'file_certificate', 'certificate_id');
    }

    /**
     * Get the updates for the certificate.
     */
    public function updates(): HasMany
    {
        return $this->hasMany(CertificateUpdates::class, 'certificate_updates_certificate', 'certificate_id');
    }
}