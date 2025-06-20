<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsTemporaryIncomeType extends Model
{
    protected $table = 'accounts_temporary_income_type';
    protected $primaryKey = 'tinyInteger';
    public $timestamps = false;

        protected $fillable = [
        'temporary_income_type_name',
        'temporary_income_type_sort',
    ];

    protected $casts = [
        'temporary_income_type_sort' => 'integer',
    ];
}