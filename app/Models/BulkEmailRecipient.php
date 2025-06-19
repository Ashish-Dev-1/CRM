<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BulkEmailRecipient extends Model
{
    protected $table = 'bulk_email_recipient';
    protected $primaryKey = 'bulk_email_recipient_id';
    public $timestamps = false;

    protected $fillable = [
        'bulk_email_recipient_email',
        'bulk_email_recipient_type',
        'bulk_email_recipient_employee',
        'bulk_email_recipient_landlord',
        'bulk_email_recipient_vendor',
        'bulk_email_recipient_applicant',
        'bulk_email_recipient_tenant',
        'bulk_email_recipient_address',
        'bulk_email_recipient_name',
        'bulk_email_recipient_status',
        'bulk_email_recipient_date_sent',
        'bulk_email_recipient_date_opened',
        'bulk_email_recipient_date_clicked',
    ];

    protected $dates = [
        'bulk_email_recipient_date_sent',
        'bulk_email_recipient_date_opened',
        'bulk_email_recipient_date_clicked',
    ];

    /**
     * Get the bulk email that this recipient belongs to.
     */
    public function bulkEmail(): BelongsTo
    {
        return $this->belongsTo(BulkEmail::class, 'bulk_email_recipient_email', 'bulk_email_id');
    }

    /**
     * Get the employee recipient if applicable.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'bulk_email_recipient_employee', 'employee_id');
    }

    /**
     * Get the landlord recipient if applicable.
     */
    public function landlord(): BelongsTo
    {
        return $this->belongsTo(Landlord::class, 'bulk_email_recipient_landlord', 'landlord_id');
    }

    /**
     * Get the vendor recipient if applicable.
     */
    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class, 'bulk_email_recipient_vendor', 'vendor_id');
    }

    /**
     * Get the applicant recipient if applicable.
     */
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(Applicant::class, 'bulk_email_recipient_applicant', 'applicant_id');
    }

    /**
     * Get the tenant recipient if applicable.
     */
    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class, 'bulk_email_recipient_tenant', 'tenant_id');
    }
}