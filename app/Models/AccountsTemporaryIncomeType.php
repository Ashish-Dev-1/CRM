<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountsTemporaryIncomeType extends Model
{
    protected $table = 'accounts_temporary_income_type';
    protected $primaryKey = 'temporary_income_type_id';
    public $timestamps = false;

    protected $fillable = [
        'temporary_income_type_name',
        'temporary_income_type_description',
    ];
}