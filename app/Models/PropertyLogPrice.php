<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyLogPrice extends Model
{
    protected $table = 'property_log_price';
    
    public $timestamps = false;

        protected $fillable = [
        'property_id',
        'property_price_old',
        'property_price_new',
        'property_published',
        'property_updated_by',
        'property_date_updated',
    ];

    protected $casts = [
        'property_id' => 'integer',
        'property_price_old' => 'decimal:2',
        'property_price_new' => 'decimal:2',
        'property_published' => 'boolean',
        'property_updated_by' => 'integer',
        'property_date_updated' => 'datetime',
    ];

        protected $dates = [
        'property_date_updated',
    ];

    /**
     * Get the property that this price log belongs to.
     */

    /**
     * Get the employee who created this price log record.
     */

    /**
     * Get the employee who updated this price log record.
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