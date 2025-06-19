<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccountsTenantDepositChargePayment extends Model
{
    protected $table = 'accounts_tenant_deposit_charge_payment';
    protected $primaryKey = 'tenant_deposit_charge_payment_id';
    public $timestamps = false;

    protected $fillable = [
        'tenant_deposit_charge_payment_charge',
        'tenant_deposit_charge_payment_date',
        'tenant_deposit_charge_payment_amount',
        'tenant_deposit_charge_payment_method',
        'tenant_deposit_charge_payment_reference',
        'tenant_deposit_charge_payment_notes',
        'tenant_deposit_charge_payment_date_created',
        'tenant_deposit_charge_payment_date_updated',
        'tenant_deposit_charge_payment_created_by',
        'tenant_deposit_charge_payment_updated_by',
    ];

    protected $dates = [
        'tenant_deposit_charge_payment_date',
        'tenant_deposit_charge_payment_date_created',
        'tenant_deposit_charge_payment_date_updated',
    ];

    /**
     * Get the deposit charge that this payment belongs to.
     */
    public function charge(): BelongsTo
    {
        return $this->belongsTo(AccountsTenantDepositCharge::class, 'tenant_deposit_charge_payment_charge', 'tenant_deposit_charge_id');
    }

    /**
     * Get the payment method for this payment.
     */
    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentMethod::class, 'tenant_deposit_charge_payment_method', 'payment_method_id');
    }

    /**
     * Get the employee who created this payment record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_deposit_charge_payment_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this payment record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_deposit_charge_payment_updated_by', 'employee_id');
    }
}