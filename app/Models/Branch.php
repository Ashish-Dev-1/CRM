<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    protected $table = 'branch';
    protected $primaryKey = 'branch_id';
    public $timestamps = false;

    protected $fillable = [
        'branch_company_id',
        'branch_company_name',
        'branch_name',
        'branch_sole_sale_fee',
        'branch_multi_sale_fee',
        // ...other fields...
    ];

    /**
     * Get the company that owns the branch.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'branch_company_id', 'company_id');
    }

    /**
     * Get the country of the branch.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'branch_country', 'country_id');
    }

    /**
     * Get the current bank name of the branch.
     */
    public function currentBank(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'branch_bank_name_current', 'bank_id');
    }

    /**
     * Get the client bank name of the branch.
     */
    public function clientBank(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'branch_bank_name_client', 'bank_id');
    }

    /**
     * Get the employees for the branch.
     */
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'employee_branch_id', 'branch_id');
    }

    /**
     * Get the properties for the branch.
     */
    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_branch', 'branch_id');
    }

    /**
     * Get the landlords for the branch.
     */
    public function landlords(): HasMany
    {
        return $this->hasMany(Landlord::class, 'landlord_branch', 'branch_id');
    }

    /**
     * Get the vendors for the branch.
     */
    public function vendors(): HasMany
    {
        return $this->hasMany(Vendor::class, 'vendor_branch', 'branch_id');
    }

    /**
     * Get the valuations for the branch.
     */
    public function valuations(): HasMany
    {
        return $this->hasMany(Valuation::class, 'valuation_branch', 'branch_id');
    }

    /**
     * Get the developments for the branch.
     */
    public function developments(): HasMany
    {
        return $this->hasMany(Development::class, 'development_branch', 'branch_id');
    }
}