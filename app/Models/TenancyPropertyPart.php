<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TenancyPropertyPart extends Model
{
    protected $table = 'tenancy_property_part';
    protected $primaryKey = 'tinyInteger';
    public $timestamps = false;

        protected $fillable = [
        'tenancy_property_part_name',
    ];

    /**
     * Get the tenancies for this property part.
     */
    
}