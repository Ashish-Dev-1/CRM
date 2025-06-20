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
        'key_safe_id',
        'key_safe_property',
        'key_safe_development',
        'key_safe_code',
        'key_safe_location',
        'key_safe_contains',
        'key_safe_notes',
        'key_safe_date_added',
        'key_safe_created_by',
    ];

    protected $casts = [
        'key_safe_property' => 'integer',
        'key_safe_development' => 'integer',
        'key_safe_location' => 'integer',
        'key_safe_date_added' => 'date',
        'key_safe_created_by' => 'integer',
    ];

        protected $dates = [
        'key_safe_date_added',
    ];

    /**
     * Get the property that owns the key safe.
     */
    

    /**
     * Get the location of the key safe.
     */
    

    /**
     * Get the employee who created this key safe record.
     */
    

    /**
     * Get the employee who updated this key safe record.
     */
    

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'key_safe_created_by', 'employee_id');
    }

    /**
     * Get the Development associated with this record.
     */
    public function development(): BelongsTo
    {
        return $this->belongsTo(Development::class, 'key_safe_development', 'development_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'key_safe_property', 'property_id');
    }

    /**
     * Get the KeySafeLocation associated with this record.
     */
    public function location(): BelongsTo
    {
        return $this->belongsTo(KeySafeLocation::class, 'key_safe_location', 'key_safe_location_id');
    }
}