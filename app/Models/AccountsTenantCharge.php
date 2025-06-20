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
        'tenant_charge_token',
        'tenant_charge_date',
        'tenant_charge_payment_terms',
        'tenant_charge_due_date',
        'tenant_charge_tenancy_id',
        'tenant_charge_notes',
        'tenant_charge_total_amount_exc_vat',
        'tenant_charge_total_vat_amount',
        'tenant_charge_total_amount_paid',
        'tenant_charge_branch',
        'tenant_charge_date_created',
        'tenant_charge_date_updated',
        'tenant_charge_created_by',
        'tenant_charge_updated_by',
    ];

    protected $casts = [
        'tenant_charge_date' => 'date',
        'tenant_charge_payment_terms' => 'integer',
        'tenant_charge_due_date' => 'date',
        'tenant_charge_tenancy_id' => 'integer',
        'tenant_charge_total_amount_exc_vat' => 'decimal:2',
        'tenant_charge_total_vat_amount' => 'decimal:2',
        'tenant_charge_total_amount_paid' => 'decimal:2',
        'tenant_charge_branch' => 'integer',
        'tenant_charge_date_created' => 'datetime',
        'tenant_charge_date_updated' => 'datetime',
        'tenant_charge_created_by' => 'integer',
        'tenant_charge_updated_by' => 'integer',
    ];

    protected $dates = [
        'tenant_charge_date',
        'tenant_charge_due_date',
        'tenant_charge_date_created',
        'tenant_charge_date_updated',
    ];

    /**
     * Get the tenancy associated with this charge.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenant_charge_tenancy_id', 'tenancy_id');
    }

    /**
     * Get the branch associated with this charge.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'tenant_charge_branch', 'branch_id');
    }

    /**
     * Get the payment terms for this charge.
     */
    public function paymentTerms(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentTerm::class, 'tenant_charge_payment_terms', 'accounts_payment_term_id');
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
        return $this->hasMany(AccountsTenantChargeLine::class, 'tenant_charge_line_tenant_charge_id', 'tenant_charge_id');
    }

    /**
     * Get the payments for this charge.
     */
    public function payments(): HasMany
    {
        return $this->hasMany(AccountsTenantChargePayment::class, 'tenant_charge_payment_tenant_charge_id', 'tenant_charge_id');
    }

    /**
     * Get the recurring charges for this charge.
     */
    public function recurring(): HasMany
    {
        return $this->hasMany(AccountsTenantChargeRecurring::class, 'tenant_charge_recurring_tenant_charge_id', 'tenant_charge_id');
    }
}