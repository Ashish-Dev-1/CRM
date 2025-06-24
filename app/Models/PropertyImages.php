<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyImages extends Model
{
    protected $table = 'property_images';
    
    public $timestamps = false;

        protected $fillable = [
        'property_id',
        'filename',
        'caption',
        'filesize',
        'date_added',
        'sort',
        'sort_highlights',
        'floor_plan',
    ];

    protected $casts = [
        'property_id' => 'integer',
        'date_added' => 'datetime',
        'floor_plan' => 'integer',
    ];

        protected $dates = [
        'date_added',
    ];

    /**
     * Get the property that owns the image.
     */

    /**
     * Get the room associated with this image, if any.
     */

    /**
     * Get the employee who created this image record.
     */

    /**
     * Get the employee who updated this image record.
     */

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}