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
        'bulk_email_recipient_id',
        'bulk_email_recipient_name',
        'bulk_email_recipient_type',
    ];

    protected $casts = [
        'bulk_email_recipient_id' => 'integer',
        'bulk_email_recipient_type' => 'integer',
    ];

    protected $dates = [
        'bulk_email_recipient_date_sent',
        'bulk_email_recipient_date_opened',
        'bulk_email_recipient_date_clicked',
    ];

    /**
     * Get the bulk email that this recipient belongs to.
     */
    

    /**
     * Get the employee recipient if applicable.
     */
    

    /**
     * Get the landlord recipient if applicable.
     */
    

    /**
     * Get the vendor recipient if applicable.
     */
    

    /**
     * Get the applicant recipient if applicable.
     */
    

    /**
     * Get the tenant recipient if applicable.
     */
    
}