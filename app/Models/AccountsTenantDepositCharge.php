<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsTenantDepositCharge extends Model
{
    protected $table = 'accounts_tenant_deposit_charges';
    protected $primaryKey = 'tenant_deposit_charge_id';
    public $timestamps = false;

    protected $fillable = [
        'tenant_deposit_charge_token',
        'tenant_deposit_charge_date',
        'tenant_deposit_charge_payment_terms',
        'tenant_deposit_charge_due_date',
        'tenant_deposit_charge_amount',
        'tenant_deposit_charge_total_amount_paid',
        'tenant_deposit_charge_tenancy_id',
        'tenant_deposit_charge_notes',
        'tenant_deposit_charge_branch',
        'tenant_deposit_charge_date_created',
        'tenant_deposit_charge_date_updated',
        'tenant_deposit_charge_created_by',
        'tenant_deposit_charge_updated_by',
    ];

    protected $casts = [
        'tenant_deposit_charge_date' => 'date',
        'tenant_deposit_charge_payment_terms' => 'integer',
        'tenant_deposit_charge_due_date' => 'date',
        'tenant_deposit_charge_amount' => 'decimal:2',
        'tenant_deposit_charge_total_amount_paid' => 'decimal:2',
        'tenant_deposit_charge_tenancy_id' => 'integer',
        'tenant_deposit_charge_branch' => 'integer',
        'tenant_deposit_charge_date_created' => 'datetime',
        'tenant_deposit_charge_date_updated' => 'datetime',
        'tenant_deposit_charge_created_by' => 'integer',
        'tenant_deposit_charge_updated_by' => 'integer',
    ];

    protected $dates = [
        'tenant_deposit_charge_date',
        'tenant_deposit_charge_due_date',
        'tenant_deposit_charge_date_created',
        'tenant_deposit_charge_date_updated',
    ];

    /**
     * Get the tenancy associated with this deposit charge.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenant_deposit_charge_tenancy_id', 'tenancy_id');
    }

    /**
     * Get the payment terms for this deposit charge.
     */
    public function paymentTerms(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentTerm::class, 'tenant_deposit_charge_payment_terms', 'accounts_payment_term_id');
    }

    /**
     * Get the branch associated with this deposit charge.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'tenant_deposit_charge_branch', 'branch_id');
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
        return $this->hasMany(AccountTenantDepositChargePayment::class, 'tenant_deposit_charge_payment_tenant_deposit_charge_id', 'tenant_deposit_charge_id');
    }
}