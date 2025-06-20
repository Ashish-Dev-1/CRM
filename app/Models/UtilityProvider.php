<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UtilityProvider extends Model
{
    protected $table = 'utility_provider';
    protected $primaryKey = 'utility_provider_id';
    public $timestamps = false;

        protected $fillable = [
        'utility_provider_id',
        'utility_provider_name',
    ];

    /**
     * Get the meters managed by this provider.
     */
    
}