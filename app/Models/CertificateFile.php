<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CertificateFile extends Model
{
    protected $table = 'certificate_files';
    protected $primaryKey = 'file_id';
    public $timestamps = false;

    protected $fillable = [
        'file_certificate',
        'file_name',
        'file_filename',
        'file_date_created',
        'file_date_updated',
        'file_created_by',
        'file_updated_by',
    ];

    protected $dates = [
        'file_date_created',
        'file_date_updated',
    ];

    /**
     * Get the certificate that owns the file.
     */
    public function certificate(): BelongsTo
    {
        return $this->belongsTo(Certificate::class, 'file_certificate', 'certificate_id');
    }

    /**
     * Get the employee who created the file.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'file_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the file.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'file_updated_by', 'employee_id');
    }
}