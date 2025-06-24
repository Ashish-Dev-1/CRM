<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TenancyFixedTermUnit extends Model
{
    protected $table = 'tenancy_fixed_term_unit';
    
    public $timestamps = false;

        protected $fillable = [
        'tenancy_fixed_term_unit_name',
    ];

    /**
     * Get the tenancies that use this fixed term unit.
     */
    
}