<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'company_id';
    public $timestamps = false;

    protected $fillable = [
        'company_token',
        'company_legal_name',
        'company_trading_name',
        'company_registration_number',
        'company_default_vat_rate',
        'company_vat_registration_number',
        // ...other fields...
    ];

    /**
     * Get the VAT rate associated with the company.
     */
    public function vatRate(): BelongsTo
    {
        return $this->belongsTo(VatRate::class, 'company_default_vat_rate', 'vat_rate_id');
    }

    /**
     * Get the registered office country of the company.
     */
    public function registeredOfficeCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'company_reg_office_country', 'country_id');
    }

    /**
     * Get the country of the company.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'company_country', 'country_id');
    }

    /**
     * Get the branches for the company.
     */
    public function branches(): HasMany
    {
        return $this->hasMany(Branch::class, 'branch_company_id', 'company_id');
    }

    /**
     * Get the employees for the company.
     */
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'company_id', 'company_id');
    }
}