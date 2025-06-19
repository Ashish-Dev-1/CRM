<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsTenantChargePaymentType extends Model
{
    protected $table = 'accounts_tenant_charge_payment_type';
    protected $primaryKey = 'accounts_tenant_charge_payment_type_id';
    public $timestamps = false;

    protected $fillable = [
        'accounts_tenant_charge_payment_type_name',
        'accounts_tenant_charge_payment_type_description',
    ];

    /**
     * Get the tenant charge payments of this type.
     */
    public function tenantChargePayments(): HasMany
    {
        return $this->hasMany(AccountsTenantChargePayment::class, 'tenant_charge_payment_type', 'accounts_tenant_charge_payment_type_id');
    }
}