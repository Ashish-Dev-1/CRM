<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccountsTenantChargeLine extends Model
{
    protected $table = 'accounts_tenant_charge_line';
    protected $primaryKey = 'tenant_charge_line_id';
    public $timestamps = false;

    protected $fillable = [
        'tenant_charge_id',
        'tenant_charge_line_type',
        'tenant_charge_line_description',
        'tenant_charge_line_amount',
        'tenant_charge_line_vat_rate',
        'tenant_charge_line_vat_amount',
    ];

    protected $casts = [
        'tenant_charge_id' => 'integer',
        'tenant_charge_line_type' => 'integer',
        'tenant_charge_line_amount' => 'decimal:2',
        'tenant_charge_line_vat_rate' => 'integer',
        'tenant_charge_line_vat_amount' => 'decimal:2',
    ];

    protected $dates = [
        'tenant_charge_line_period_from',
        'tenant_charge_line_period_to',
        'tenant_charge_line_date_created',
        'tenant_charge_line_date_updated',
    ];

    /**
     * Get the charge that this line belongs to.
     */
    public function tenantCharge(): BelongsTo
    {
        return $this->belongsTo(AccountsTenantCharge::class, 'tenant_charge_id', 'tenant_charge_id');
    }

    /**
     * Get the type of this charge line.
     */
    public function lineType(): BelongsTo
    {
        return $this->belongsTo(AccountsTenantChargeLineType::class, 'tenant_charge_line_type', 'tenant_charge_line_type_id');
    }

    /**
     * Get the VAT rate for this charge line.
     */
    public function vatRate(): BelongsTo
    {
        return $this->belongsTo(AccountsVatRate::class, 'tenant_charge_line_vat_rate', 'vat_rate_id');
    }

    /**
     * Get the employee who created this charge line.
     */
    

    /**
     * Get the employee who updated this charge line.
     */
    
}