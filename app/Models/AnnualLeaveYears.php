<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnualLeaveYears extends Model
{
    protected $table = 'annual_leave_years';
    protected $primaryKey = 'year';
    protected $keyType = 'int'; // YEAR type in the database
    public $timestamps = false;
    public $incrementing = false;

        protected $fillable = [
        'annual_leave_years_statutory_entitlement_days',
    ];

    protected $casts = [
        'annual_leave_years_statutory_entitlement_days' => 'integer',
    ];
}