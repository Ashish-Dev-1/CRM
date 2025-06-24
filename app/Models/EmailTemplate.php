<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmailTemplate extends Model
{
    protected $table = 'email_template';
    
    public $timestamps = false;

        protected $fillable = [
        'email_template_name',
        'email_template_category',
        'email_template_to',
        'email_template_cc',
        'email_template_bcc',
        'email_template_subject',
        'email_template_body',
        'email_template_date_created',
        'email_template_date_updated',
        'email_template_created_by',
        'email_template_updated_by',
    ];

    protected $casts = [
        'email_template_category' => 'integer',
        'email_template_date_created' => 'datetime',
        'email_template_date_updated' => 'datetime',
        'email_template_created_by' => 'integer',
        'email_template_updated_by' => 'integer',
    ];

        protected $dates = [
        'email_template_date_created',
        'email_template_date_updated',
    ];

    /**
     * Get the category of this email template.
     */

    /**
     * Get the employee who created this email template.
     */

    /**
     * Get the employee who updated this email template.
     */

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'email_template_created_by', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'email_template_updated_by', 'employee_id');
    }

    /**
     * Get the EmailTemplateCategory associated with this record.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(EmailTemplateCategory::class, 'email_template_category', 'email_template_category_id');
    }
}