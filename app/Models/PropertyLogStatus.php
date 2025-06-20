<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyLogStatus extends Model
{
    protected $table = 'property_log_status';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'property_id',
        'property_status_old',
        'property_status_new',
        'property_status_notes',
        'property_published',
        'property_updated_by',
        'property_date_updated',
    ];

    protected $casts = [
        'property_id' => 'integer',
        'property_status_old' => 'integer',
        'property_status_new' => 'integer',
        'property_published' => 'boolean',
        'property_updated_by' => 'integer',
        'property_date_updated' => 'datetime',
    ];

        protected $dates = [
        'property_date_updated',
    ];

    /**
     * Get the property that this status log belongs to.
     */
    

    /**
     * Get the old status of the property.
     */
    

    /**
     * Get the new status of the property.
     */
    

    /**
     * Get the employee who created this status log record.
     */
    

    /**
     * Get the employee who updated this status log record.
     */
    

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_updated_by', 'employee_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}