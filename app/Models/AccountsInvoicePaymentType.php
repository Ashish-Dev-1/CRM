<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoicePaymentType extends Model
{
    protected $table = 'accounts_invoice_payment_type';
    protected $primaryKey = 'accounts_invoice_payment_type_id';
    public $timestamps = false;

    protected $fillable = [
        'accounts_invoice_payment_type_name',
    ];

    /**
     * Get the invoice payments of this type.
     */
    public function invoicePayments(): HasMany
    {
        return $this->hasMany(AccountsInvoicePayment::class, 'invoice_payment_type', 'accounts_invoice_payment_type_id');
    }
}