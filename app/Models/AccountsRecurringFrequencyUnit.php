<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsRecurringFrequencyUnit extends Model
{
    protected $table = 'accounts_recurring_frequency_unit';
    protected $primaryKey = 'recurring_frequency_unit_id';
    public $timestamps = false;

    protected $fillable = [
        'recurring_frequency_unit_name',
        'recurring_frequency_unit_description',
    ];

    /**
     * Get the recurring invoices that use this frequency unit.
     */
    public function recurringInvoices(): HasMany
    {
        return $this->hasMany(AccountsInvoiceRecurring::class, 'invoice_recurring_frequency_unit', 'recurring_frequency_unit_id');
    }

    /**
     * Get the recurring tenant charges that use this frequency unit.
     */
    public function recurringTenantCharges(): HasMany
    {
        return $this->hasMany(AccountsTenantChargeRecurring::class, 'tenant_charge_recurring_frequency_unit', 'recurring_frequency_unit_id');
    }
}