<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsTenantChargeRecurring extends Model
{
    protected $table = 'accounts_tenant_charge_recurrings';
    protected $primaryKey = 'tenant_charge_recurring_id';
    public $timestamps = false;

    protected $fillable = [
        'tenant_charge_recurring_tenant_charge_id',
        'tenant_charge_recurring_tenancy_id',
        'tenant_charge_recurring_frequency',
        'tenant_charge_recurring_frequency_unit',
        'tenant_charge_recurring_start_date',
        'tenant_charge_recurring_end_date',
        'tenant_charge_recurring_next_processing_date',
        'tenant_charge_recurring_suspended',
        'tenant_charge_recurring_date_created',
        'tenant_charge_recurring_date_updated',
        'tenant_charge_recurring_created_by',
        'tenant_charge_recurring_updated_by',
    ];

    protected $casts = [
        'tenant_charge_recurring_tenant_charge_id' => 'integer',
        'tenant_charge_recurring_tenancy_id' => 'integer',
        'tenant_charge_recurring_frequency' => 'integer',
        'tenant_charge_recurring_frequency_unit' => 'integer',
        'tenant_charge_recurring_suspended' => 'integer',
        'tenant_charge_recurring_date_created' => 'datetime',
        'tenant_charge_recurring_date_updated' => 'datetime',
        'tenant_charge_recurring_created_by' => 'integer',
        'tenant_charge_recurring_updated_by' => 'integer',
    ];

    protected $dates = [
        'tenant_charge_recurring_start_date',
        'tenant_charge_recurring_end_date',
        'tenant_charge_recurring_next_processing_date',
        'tenant_charge_recurring_date_created',
        'tenant_charge_recurring_date_updated',
    ];

    /**
     * Get the tenant charge associated with this recurring charge.
     */
    public function tenantCharge(): BelongsTo
    {
        return $this->belongsTo(AccountsTenantCharge::class, 'tenant_charge_recurring_tenant_charge_id', 'tenant_charge_id');
    }

    /**
     * Get the tenancy associated with this recurring charge.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenant_charge_recurring_tenancy_id', 'tenancy_id');
    }

    /**
     * Get the frequency unit for this recurring charge.
     */
    public function frequencyUnit(): BelongsTo
    {
        return $this->belongsTo(AccountsRecurringFrequencyUnit::class, 'tenant_charge_recurring_frequency_unit', 'recurring_frequency_unit_id');
    }

    /**
     * Get the employee who created this recurring charge.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_recurring_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this recurring charge.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_recurring_updated_by', 'employee_id');
    }

    /**
     * Get the tenant charges generated from this recurring charge.
     */
    public function generatedCharges(): HasMany
    {
        return $this->hasMany(AccountsTenantCharge::class, 'tenant_charge_recurring', 'tenant_charge_recurring_id');
    }
}