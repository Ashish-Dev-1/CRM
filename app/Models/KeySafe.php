<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KeySafe extends Model
{
    protected $table = 'key_safe';
    protected $primaryKey = 'key_safe_id';
    public $timestamps = false;

    protected $fillable = [
        'key_safe_property',
        'key_safe_code',
        'key_safe_location',
        'key_safe_notes',
        'key_safe_date_created',
        'key_safe_date_updated',
        'key_safe_created_by',
        'key_safe_updated_by',
    ];

    protected $dates = [
        'key_safe_date_created',
        'key_safe_date_updated',
    ];

    /**
     * Get the property that owns the key safe.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'key_safe_property', 'property_id');
    }

    /**
     * Get the location of the key safe.
     */
    public function location(): BelongsTo
    {
        return $this->belongsTo(KeySafeLocation::class, 'key_safe_location', 'key_safe_location_id');
    }

    /**
     * Get the employee who created this key safe record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'key_safe_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this key safe record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'key_safe_updated_by', 'employee_id');
    }
}