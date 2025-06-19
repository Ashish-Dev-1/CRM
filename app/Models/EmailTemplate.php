<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmailTemplate extends Model
{
    protected $table = 'email_template';
    protected $primaryKey = 'email_template_id';
    public $timestamps = false;

    protected $fillable = [
        'email_template_name',
        'email_template_subject',
        'email_template_body',
        'email_template_category',
        'email_template_sort',
        'email_template_status',
        'email_template_date_created',
        'email_template_date_updated',
        'email_template_created_by',
        'email_template_updated_by',
    ];

    protected $dates = [
        'email_template_date_created',
        'email_template_date_updated',
    ];

    /**
     * Get the category of this email template.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(EmailTemplateCategory::class, 'email_template_category', 'email_template_category_id');
    }

    /**
     * Get the employee who created this email template.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'email_template_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this email template.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'email_template_updated_by', 'employee_id');
    }
}