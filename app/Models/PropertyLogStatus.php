<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyLogStatus extends Model
{
    protected $table = 'property_log_status';
    protected $primaryKey = 'property_log_status_id';
    public $timestamps = false;

    protected $fillable = [
        'property_log_status_property',
        'property_log_status_date',
        'property_log_status_old',
        'property_log_status_new',
        'property_log_status_notes',
        'property_log_status_date_created',
        'property_log_status_date_updated',
        'property_log_status_created_by',
        'property_log_status_updated_by',
    ];

    protected $dates = [
        'property_log_status_date',
        'property_log_status_date_created',
        'property_log_status_date_updated',
    ];

    /**
     * Get the property that this status log belongs to.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_log_status_property', 'property_id');
    }

    /**
     * Get the old status of the property.
     */
    public function oldStatus(): BelongsTo
    {
        return $this->belongsTo(PropertyStatus::class, 'property_log_status_old', 'property_status_id');
    }

    /**
     * Get the new status of the property.
     */
    public function newStatus(): BelongsTo
    {
        return $this->belongsTo(PropertyStatus::class, 'property_log_status_new', 'property_status_id');
    }

    /**
     * Get the employee who created this status log record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_log_status_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this status log record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_log_status_updated_by', 'employee_id');
    }
}