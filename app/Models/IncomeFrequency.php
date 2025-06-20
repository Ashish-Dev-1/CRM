<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IncomeFrequency extends Model
{
    protected $table = 'income_frequency';
    protected $primaryKey = 'income_frequency_id';
    public $timestamps = false;

        protected $fillable = [
        'income_frequency_id',
        'income_frequency_name',
        'income_frequency_sort',
    ];

    /**
     * Get the tenant income records with this frequency.
     */
    

    /**
     * Get the guarantor income records with this frequency.
     */
    
}