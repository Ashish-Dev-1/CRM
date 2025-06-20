<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccountsLandlordPayment extends Model
{
    protected $table = 'accounts_landlord_payment';
    protected $primaryKey = 'landlord_payment_id';
    public $timestamps = false;

    protected $fillable = [
        'landlord_payment_date',
        'landlord_payment_tenancy_id',
        'landlord_payment_amount',
        'landlord_payment_method',
        'landlord_payment_notes',
        'landlord_payment_date_created',
        'landlord_payment_date_updated',
        'landlord_payment_created_by',
        'landlord_payment_updated_by',
    ];

    protected $dates = [
        'landlord_payment_date',
        'landlord_payment_date_created',
        'landlord_payment_date_updated',
    ];

    protected $casts = [
        'landlord_payment_date' => 'date',
        'landlord_payment_tenancy_id' => 'integer',
        'landlord_payment_amount' => 'decimal:2',
        'landlord_payment_method' => 'integer',
        'landlord_payment_date_created' => 'datetime',
        'landlord_payment_date_updated' => 'datetime',
        'landlord_payment_created_by' => 'integer',
        'landlord_payment_updated_by' => 'integer',
    ];

    /**
     * Get the tenancy associated with this payment.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'landlord_payment_tenancy_id', 'tenancy_id');
    }

    /**
     * Get the payment method for this payment.
     */
    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentMethod::class, 'landlord_payment_method', 'payment_method_id');
    }

    /**
     * Get the employee who created this payment record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'landlord_payment_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this payment record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'landlord_payment_updated_by', 'employee_id');
    }
}