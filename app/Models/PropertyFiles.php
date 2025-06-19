<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyFiles extends Model
{
    protected $table = 'property_files';
    protected $primaryKey = 'file_id';
    public $timestamps = false;

    protected $fillable = [
        'file_property',
        'file_name',
        'file_filename',
        'file_category',
        'file_notes',
        'file_date_created',
        'file_date_updated',
        'file_created_by',
        'file_updated_by',
    ];

    protected $dates = [
        'file_date_created',
        'file_date_updated',
    ];

    /**
     * Get the property that owns the file.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'file_property', 'property_id');
    }

    /**
     * Get the employee who created this file record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'file_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this file record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'file_updated_by', 'employee_id');
    }
}