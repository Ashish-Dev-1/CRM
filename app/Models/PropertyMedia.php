<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyMedia extends Model
{
    protected $table = 'property_media';
    protected $primaryKey = 'property_media_id';
    public $timestamps = false;

    protected $fillable = [
        'property_media_property',
        'property_media_type',
        'property_media_name',
        'property_media_filename',
        'property_media_url',
        'property_media_embed_code',
        'property_media_description',
        'property_media_display_order',
        'property_media_date_created',
        'property_media_date_updated',
        'property_media_created_by',
        'property_media_updated_by',
    ];

    protected $dates = [
        'property_media_date_created',
        'property_media_date_updated',
    ];

    /**
     * Get the property that owns this media.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_media_property', 'property_id');
    }

    /**
     * Get the type of media.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(MediaType::class, 'property_media_type', 'media_type_id');
    }

    /**
     * Get the employee who created this media record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_media_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this media record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'property_media_updated_by', 'employee_id');
    }
}