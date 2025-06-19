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
        'landlord_payment_landlord',
        'landlord_payment_property',
        'landlord_payment_date',
        'landlord_payment_amount',
        'landlord_payment_method',
        'landlord_payment_reference',
        'landlord_payment_notes',
        'landlord_payment_bacs_file',
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

    /**
     * Get the landlord that received this payment.
     */
    public function landlord(): BelongsTo
    {
        return $this->belongsTo(Landlord::class, 'landlord_payment_landlord', 'landlord_id');
    }

    /**
     * Get the property associated with this payment, if any.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'landlord_payment_property', 'property_id');
    }

    /**
     * Get the payment method for this payment.
     */
    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentMethod::class, 'landlord_payment_method', 'payment_method_id');
    }

    /**
     * Get the BACS file that included this payment, if applicable.
     */
    public function bacsFile(): BelongsTo
    {
        return $this->belongsTo(AccountsBacsFile::class, 'landlord_payment_bacs_file', 'bacs_file_id');
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