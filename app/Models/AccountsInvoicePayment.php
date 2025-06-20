<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccountsInvoicePayment extends Model
{
    protected $table = 'accounts_invoice_payment';
    protected $primaryKey = 'invoice_payment_id';
    public $timestamps = false;

    protected $fillable = [
        'invoice_payment_date',
        'invoice_payment_amount',
        'invoice_payment_method',
        'invoice_payment_invoice_id',
        'invoice_payment_notes',
        'invoice_payment_type',
        'invoice_payment_type_id',
        'invoice_payment_use_balance',
        'invoice_payment_tenancy_id',
        'invoice_payment_date_created',
        'invoice_payment_date_updated',
        'invoice_payment_created_by',
        'invoice_payment_updated_by',
    ];

    protected $dates = [
        'invoice_payment_date',
        'invoice_payment_date_created',
        'invoice_payment_date_updated',
    ];

    protected $casts = [
        'invoice_payment_date' => 'date',
        'invoice_payment_amount' => 'decimal:2',
        'invoice_payment_method' => 'integer',
        'invoice_payment_invoice_id' => 'integer',
        'invoice_payment_type' => 'integer',
        'invoice_payment_type_id' => 'integer',
        'invoice_payment_use_balance' => 'integer',
        'invoice_payment_tenancy_id' => 'integer',
        'invoice_payment_date_created' => 'datetime',
        'invoice_payment_date_updated' => 'datetime',
        'invoice_payment_created_by' => 'integer',
        'invoice_payment_updated_by' => 'integer',
    ];

    /**
     * Get the invoice that this payment belongs to.
     */
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoice::class, 'invoice_payment_invoice_id', 'invoice_id');
    }

    /**
     * Get the payment method for this payment.
     */
    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentMethod::class, 'invoice_payment_method', 'payment_method_id');
    }

    /**
     * Get the payment type for this payment.
     */
    public function paymentType(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoicePaymentType::class, 'invoice_payment_type', 'accounts_invoice_payment_type_id');
    }

    /**
     * Get the invoice credit associated with this payment type.
     */
    public function invoiceCredit(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoiceCredit::class, 'invoice_payment_type_id', 'invoice_credit_id');
    }

    /**
     * Get the tenancy associated with this payment.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'invoice_payment_tenancy_id', 'tenancy_id');
    }

    /**
     * Get the employee who created this payment record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_payment_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this payment record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_payment_updated_by', 'employee_id');
    }
}