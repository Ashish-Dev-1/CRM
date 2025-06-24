<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyRoomLettingSize extends Model
{
    protected $table = 'property_room_letting_size';
    
    public $timestamps = false;

        protected $fillable = [
        'property_room_letting_size_name',
    ];

    /**
     * Get the property room lettings that use this size.
     */
    
}