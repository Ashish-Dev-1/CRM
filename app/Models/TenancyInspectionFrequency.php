<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TenancyInspectionFrequency extends Model
{
    protected $table = 'tenancy_inspection_frequency';
    protected $primaryKey = 'tinyInteger';
    public $timestamps = false;

        protected $fillable = [
        'tenancy_inspection_frequency_name',
        'tenancy_inspection_frequency_sort',
    ];

    protected $casts = [
        'tenancy_inspection_frequency_sort' => 'integer',
    ];

    /**
     * Get the tenancies with this inspection frequency.
     */
    
}