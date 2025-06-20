<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificateDevelopment extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'certificate_created_by', 'employee_id');
    }

    /**
     * Get the Development associated with this record.
     */
    public function development(): BelongsTo
    {
        return $this->belongsTo(Development::class, 'certificate_development', 'development_id');
    }

    /**
     * Get the CertificateType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(CertificateType::class, 'certificate_type', 'certificate_type_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function contractor(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'certificate_renewal_contractor', 'directory_id');
    }
}
