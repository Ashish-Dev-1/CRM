<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BulkEmail extends Model
{
    protected $table = 'bulk_email';
    protected $primaryKey = 'bulk_email_id';
    public $timestamps = false;

    protected $fillable = [
        'bulk_email_subject',
        'bulk_email_body',
        'bulk_email_template',
        'bulk_email_status',
        'bulk_email_date_created',
        'bulk_email_date_updated',
        'bulk_email_date_sent',
        'bulk_email_created_by',
        'bulk_email_updated_by',
        'bulk_email_sent_by',
    ];

    protected $dates = [
        'bulk_email_date_created',
        'bulk_email_date_updated',
        'bulk_email_date_sent',
    ];

    /**
     * Get the template used for this bulk email.
     */
    public function template(): BelongsTo
    {
        return $this->belongsTo(BulkEmailTemplate::class, 'bulk_email_template', 'bulk_email_template_id');
    }

    /**
     * Get the employee who created this bulk email.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'bulk_email_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this bulk email.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'bulk_email_updated_by', 'employee_id');
    }

    /**
     * Get the employee who sent this bulk email.
     */
    public function sentBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'bulk_email_sent_by', 'employee_id');
    }

    /**
     * Get the recipients for this bulk email.
     */
    public function recipients(): HasMany
    {
        return $this->hasMany(BulkEmailRecipient::class, 'bulk_email_recipient_email', 'bulk_email_id');
    }
}