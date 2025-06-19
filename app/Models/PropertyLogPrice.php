<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyLogPrice extends Model
{
    protected $table = 'property_log_price';
    protected $primaryKey = 'property_log_price_id';
    public $timestamps = false;

    protected $fillable = [
        'property_log_price_property',
        'property_log_price_date',
        'property_log_price_old',
        'property_log_price_new',
        'property_log_price_notes',
        'property_log_price_date_created',
        'property_log_price_date_updated',
        'property_log_price_created_by',
        'property_log_price_updated_by',
    ];

    protected $dates = [
        'property_log_price_date',
        'property_log_price_date_created',
        'property_log_price_date_updated',
    ];

    /**
     * Get the property that this price log belongs to.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_log_price_property', 'property_id');
    }

    /**
     * Get the employee who created this price log record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_log_price_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this price log record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_log_price_updated_by', 'employee_id');
    }
}