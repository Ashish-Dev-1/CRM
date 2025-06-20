<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsPaymentTerm extends Model
{
    protected $table = 'accounts_payment_term';
    protected $primaryKey = 'accounts_payment_term_id';
    public $timestamps = false;

    protected $fillable = [
        'accounts_payment_term_description',
        'accounts_payment_term_sort',
    ];

    protected $casts = [
        'accounts_payment_term_sort' => 'integer',
    ];

    /**
     * Get the directory entries that use these payment terms.
     */
    public function directories(): HasMany
    {
        return $this->hasMany(Directory::class, 'directory_payment_terms', 'accounts_payment_term_id');
    }

    /**
     * Get the invoices that use these payment terms.
     */
    public function invoices(): HasMany
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_payment_terms', 'accounts_payment_term_id');
    }

    /**
     * Get the tenant charges that use these payment terms.
     */
    public function tenantCharges(): HasMany
    {
        return $this->hasMany(AccountsTenantCharge::class, 'tenant_charge_payment_terms', 'accounts_payment_term_id');
    }

    /**
     * Get the tenant deposit charges that use these payment terms.
     */
    public function tenantDepositCharges(): HasMany
    {
        return $this->hasMany(AccountsTenantDepositCharge::class, 'tenant_deposit_charge_payment_terms', 'accounts_payment_term_id');
    }
}