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
        'bulk_email_id',
        'bulk_email_from_email',
        'bulk_email_from_name',
        'bulk_email_reply_to_email',
        'bulk_email_reply_to_name',
        'bulk_email_unsubscribe_email',
        'bulk_email_unsubscribe_link',
        'bulk_email_unsubscribe_subject',
        'bulk_email_email_body',
        'bulk_email_email_subject',
        'bulk_email_to_email',
        'bulk_email_cc_email',
        'bulk_email_bcc_email',
        'bulk_email_customer_type',
        'bulk_email_property_id',
        'bulk_email_app_req_id',
        'bulk_email_sent',
        'bulk_email_date_created',
        'bulk_email_date_sent',
    ];

    protected $casts = [
        'bulk_email_id' => 'integer',
        'bulk_email_customer_type' => 'integer',
        'bulk_email_property_id' => 'integer',
        'bulk_email_app_req_id' => 'integer',
        'bulk_email_sent' => 'integer',
        'bulk_email_date_created' => 'datetime',
        'bulk_email_date_sent' => 'datetime',
    ];

        protected $dates = [
        'bulk_email_date_created',
        'bulk_email_date_sent',
    ];

    /**
     * Get the template used for this bulk email.
     */
    

    /**
     * Get the employee who created this bulk email.
     */
    

    /**
     * Get the employee who updated this bulk email.
     */
    

    /**
     * Get the employee who sent this bulk email.
     */
    

    /**
     * Get the recipients for this bulk email.
     */
    

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'bulk_email_property_id', 'property_id');
    }

    /**
     * Get the CustomerType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(CustomerType::class, 'bulk_email_customer_type', 'customer_type_id');
    }

    /**
     * Get the ApplicantRequirement associated with this record.
     */
    public function applicantRequirement(): BelongsTo
    {
        return $this->belongsTo(ApplicantRequirement::class, 'bulk_email_app_req_id', 'ar_id');
    }
}