<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateUpdatesDevelopment extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'certificate_updates_created_by', 'employee_id');
    }

    /**
     * Get the CertificateDevelopment associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(CertificateDevelopment::class, 'certificate_updates_certificate_id', 'certificate_id');
    }
}
