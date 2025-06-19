<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CertificateStatus extends Model
{
    protected $table = 'certificate_status';
    protected $primaryKey = 'certificate_status_id';
    public $timestamps = false;

    protected $fillable = [
        'certificate_status_name',
        'certificate_status_description',
    ];

    /**
     * Get the certificates with this status.
     */
    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class, 'certificate_status', 'certificate_status_id');
    }

    /**
     * Get the development certificates with this status.
     */
    public function developmentCertificates(): HasMany
    {
        return $this->hasMany(CertificateDevelopment::class, 'certificate_status', 'certificate_status_id');
    }
}