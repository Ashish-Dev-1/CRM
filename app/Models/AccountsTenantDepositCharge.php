<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsTenantDepositCharge extends Model
{
    protected $table = 'accounts_tenant_deposit_charge';
    protected $primaryKey = 'tenant_deposit_charge_id';
    public $timestamps = false;

    protected $fillable = [
        'tenant_deposit_charge_tenant',
        'tenant_deposit_charge_tenancy',
        'tenant_deposit_charge_property',
        'tenant_deposit_charge_date',
        'tenant_deposit_charge_reference',
        'tenant_deposit_charge_status',
        'tenant_deposit_charge_amount',
        'tenant_deposit_charge_amount_paid',
        'tenant_deposit_charge_date_created',
        'tenant_deposit_charge_date_updated',
        'tenant_deposit_charge_created_by',
        'tenant_deposit_charge_updated_by',
    ];

    protected $dates = [
        'tenant_deposit_charge_date',
        'tenant_deposit_charge_date_created',
        'tenant_deposit_charge_date_updated',
    ];

    /**
     * Get the tenant that this deposit charge belongs to.
     */
    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class, 'tenant_deposit_charge_tenant', 'tenant_id');
    }

    /**
     * Get the tenancy associated with this deposit charge.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenant_deposit_charge_tenancy', 'tenancy_id');
    }

    /**
     * Get the property associated with this deposit charge.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'tenant_deposit_charge_property', 'property_id');
    }

    /**
     * Get the employee who created this deposit charge.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_deposit_charge_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this deposit charge.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_deposit_charge_updated_by', 'employee_id');
    }

    /**
     * Get the payments for this deposit charge.
     */
    public function payments(): HasMany
    {
        return $this->hasMany(AccountTenantDepositChargePayment::class, 'tenant_deposit_charge_payment_charge', 'tenant_deposit_charge_id');
    }
}