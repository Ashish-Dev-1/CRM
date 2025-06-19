<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CertificateType extends Model
{
    protected $table = 'certificate_type';
    protected $primaryKey = 'certificate_type_id';
    public $timestamps = false;

    protected $fillable = [
        'certificate_type_name',
        'certificate_type_description',
        'certificate_type_expiry_notification_days',
    ];

    /**
     * Get the certificates of this type.
     */
    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class, 'certificate_type', 'certificate_type_id');
    }

    /**
     * Get the development certificates of this type.
     */
    public function developmentCertificates(): HasMany
    {
        return $this->hasMany(CertificateDevelopment::class, 'certificate_type', 'certificate_type_id');
    }
}