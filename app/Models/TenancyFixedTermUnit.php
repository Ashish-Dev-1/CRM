<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TenancyFixedTermUnit extends Model
{
    protected $table = 'tenancy_fixed_term_unit';
    protected $primaryKey = 'tenancy_fixed_term_unit_id';
    public $timestamps = false;

    protected $fillable = [
        'tenancy_fixed_term_unit_name',
        'tenancy_fixed_term_unit_description',
    ];

    /**
     * Get the tenancies that use this fixed term unit.
     */
    public function tenancies(): HasMany
    {
        return $this->hasMany(Tenancy::class, 'tenancy_fixed_term_unit', 'tenancy_fixed_term_unit_id');
    }
}