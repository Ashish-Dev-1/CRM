<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Utility extends Model
{
    protected $table = 'utility';
    protected $primaryKey = 'utility_id';
    public $timestamps = false;

        protected $fillable = [
        'utility_id',
        'utility_name',
    ];

    /**
     * Get the meters for this utility.
     */
    
}