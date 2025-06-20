<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsNominalCodeType extends Model
{
    protected $table = 'accounts_nominal_code_type';
    protected $primaryKey = 'tinyInteger';
    public $timestamps = false;

        protected $fillable = [
        'nominal_code_type_name',
    ];

    /**
     * Get the nominal codes of this type.
     */
    
}