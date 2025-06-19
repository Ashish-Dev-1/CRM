<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyImages extends Model
{
    protected $table = 'property_images';
    protected $primaryKey = 'image_id';
    public $timestamps = false;

    protected $fillable = [
        'image_property',
        'image_filename',
        'image_caption',
        'image_room',
        'image_display_order',
        'image_main',
        'image_floorplan',
        'image_epc',
        'image_date_created',
        'image_date_updated',
        'image_created_by',
        'image_updated_by',
    ];

    protected $dates = [
        'image_date_created',
        'image_date_updated',
    ];

    /**
     * Get the property that owns the image.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'image_property', 'property_id');
    }

    /**
     * Get the room associated with this image, if any.
     */
    public function room(): BelongsTo
    {
        return $this->belongsTo(PropertyRoom::class, 'image_room', 'property_room_id');
    }

    /**
     * Get the employee who created this image record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'image_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this image record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'image_updated_by', 'employee_id');
    }
}