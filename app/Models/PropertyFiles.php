<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyFiles extends Model
{
    protected $table = 'property_files';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'property_id',
        'filename',
        'caption',
        'date_added',
        'sort',
    ];

    protected $casts = [
        'property_id' => 'integer',
        'date_added' => 'datetime',
    ];

        protected $dates = [
        'date_added',
    ];

    /**
     * Get the property that owns the file.
     */
    

    /**
     * Get the employee who created this file record.
     */
    

    /**
     * Get the employee who updated this file record.
     */
    

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}