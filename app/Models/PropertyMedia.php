<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyMedia extends Model
{
    protected $table = 'property_media';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'property_media_property_id',
        'property_media_link',
        'property_media_type',
    ];

    protected $casts = [
        'property_media_property_id' => 'integer',
        'property_media_type' => 'integer',
    ];

    protected $dates = [
        'property_media_date_created',
        'property_media_date_updated',
    ];

    /**
     * Get the property that owns this media.
     */
    

    /**
     * Get the type of media.
     */
    

    /**
     * Get the employee who created this media record.
     */
    

    /**
     * Get the employee who updated this media record.
     */
    

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_media_property_id', 'property_id');
    }
}