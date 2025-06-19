<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tenant extends Model
{
    protected $table = 'tenant';
    protected $primaryKey = 'tenant_id';
    public $timestamps = false;

    protected $fillable = [
        'tenant_token',
        'tenant_title',
        'tenant_first_name',
        'tenant_surname',
        'tenant_email',
        'tenant_phone_mobile',
        'tenant_dob',
        // ...other fields...
    ];

    protected $dates = [
        'tenant_dob',
        'tenant_date_created',
        'tenant_date_updated',
    ];

    /**
     * Get the title of the tenant.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'tenant_title', 'title_id');
    }

    /**
     * Get the forwarding country of the tenant.
     */
    public function forwardingCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'tenant_forwarding_country', 'country_id');
    }

    /**
     * Get the employee who created the tenant.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the tenant.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_updated_by', 'employee_id');
    }

    /**
     * Get the tenancy relationships for the tenant.
     */
    public function tenancies(): HasMany
    {
        return $this->hasMany(TenancyTenants::class, 'tenancy_tenants_tenant', 'tenant_id');
    }

    /**
     * Get the income records for the tenant.
     */
    public function incomeRecords(): HasMany
    {
        return $this->hasMany(TenantIncome::class, 'tenant_income_tenant', 'tenant_id');
    }
}