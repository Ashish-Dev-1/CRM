<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyFloor extends Model
{
    protected $table = 'property_floor';
    protected $primaryKey = 'tinyInteger';
    public $timestamps = false;

        protected $fillable = [
        'property_floor_name',
        'property_floor_sort',
    ];

    protected $casts = [
        'property_floor_sort' => 'integer',
    ];

    /**
     * Get the property rooms on this floor.
     */
    
}