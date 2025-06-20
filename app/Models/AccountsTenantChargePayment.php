<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccountsTenantChargePayment extends Model
{
    protected $table = 'accounts_tenant_charge_payments';
    protected $primaryKey = 'tenant_charge_payment_id';
    public $timestamps = false;

    protected $fillable = [
        'tenant_charge_payment_date',
        'tenant_charge_payment_amount',
        'tenant_charge_payment_method',
        'tenant_charge_payment_tenant_charge_id',
        'tenant_charge_payment_notes',
        'accounts_tenant_charge_payment_type',
        'tenant_charge_housing_benefit',
        'tenant_charge_payment_date_created',
        'tenant_charge_payment_date_updated',
        'tenant_charge_payment_created_by',
        'tenant_charge_payment_updated_by',
    ];

    protected $dates = [
        'tenant_charge_payment_date',
        'tenant_charge_payment_date_created',
        'tenant_charge_payment_date_updated',
    ];

    protected $casts = [
        'tenant_charge_payment_amount' => 'decimal:2',
        'tenant_charge_payment_method' => 'integer',
        'tenant_charge_payment_tenant_charge_id' => 'integer',
        'accounts_tenant_charge_payment_type' => 'integer',
        'tenant_charge_housing_benefit' => 'integer',
        'tenant_charge_payment_created_by' => 'integer',
        'tenant_charge_payment_updated_by' => 'integer',
    ];

    /**
     * Get the tenant charge that this payment belongs to.
     */
    public function tenantCharge(): BelongsTo
    {
        return $this->belongsTo(AccountsTenantCharge::class, 'tenant_charge_payment_tenant_charge_id', 'tenant_charge_id');
    }

    /**
     * Get the payment method for this payment.
     */
    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentMethod::class, 'tenant_charge_payment_method', 'payment_method_id');
    }

    /**
     * Get the payment type for this payment.
     */
    public function paymentType(): BelongsTo
    {
        return $this->belongsTo(AccountsTenantChargePaymentType::class, 'accounts_tenant_charge_payment_type', 'accounts_tenant_charge_payment_type_id');
    }

    /**
     * Get the employee who created this payment record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_payment_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this payment record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_payment_updated_by', 'employee_id');
    }
}