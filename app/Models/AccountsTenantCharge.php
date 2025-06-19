<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsTenantCharge extends Model
{
    protected $table = 'accounts_tenant_charge';
    protected $primaryKey = 'tenant_charge_id';
    public $timestamps = false;

    protected $fillable = [
        'tenant_charge_tenant',
        'tenant_charge_tenancy',
        'tenant_charge_property',
        'tenant_charge_date',
        'tenant_charge_reference',
        'tenant_charge_status',
        'tenant_charge_date_created',
        'tenant_charge_date_updated',
        'tenant_charge_created_by',
        'tenant_charge_updated_by',
    ];

    protected $dates = [
        'tenant_charge_date',
        'tenant_charge_date_created',
        'tenant_charge_date_updated',
    ];

    /**
     * Get the tenant that this charge is for.
     */
    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class, 'tenant_charge_tenant', 'tenant_id');
    }

    /**
     * Get the tenancy associated with this charge.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenant_charge_tenancy', 'tenancy_id');
    }

    /**
     * Get the property associated with this charge.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'tenant_charge_property', 'property_id');
    }

    /**
     * Get the employee who created this charge.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this charge.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_updated_by', 'employee_id');
    }

    /**
     * Get the lines for this charge.
     */
    public function lines(): HasMany
    {
        return $this->hasMany(AccountsTenantChargeLine::class, 'tenant_charge_line_charge', 'tenant_charge_id');
    }

    /**
     * Get the payments for this charge.
     */
    public function payments(): HasMany
    {
        return $this->hasMany(AccountsTenantChargePayment::class, 'tenant_charge_payment_charge', 'tenant_charge_id');
    }
}