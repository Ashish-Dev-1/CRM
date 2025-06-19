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
        'tenant_charge_line_charge',
        'tenant_charge_line_type',
        'tenant_charge_line_description',
        'tenant_charge_line_amount',
        'tenant_charge_line_display_order',
        'tenant_charge_line_period_from',
        'tenant_charge_line_period_to',
        'tenant_charge_line_date_created',
        'tenant_charge_line_date_updated',
        'tenant_charge_line_created_by',
        'tenant_charge_line_updated_by',
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
    public function charge(): BelongsTo
    {
        return $this->belongsTo(AccountsTenantCharge::class, 'tenant_charge_line_charge', 'tenant_charge_id');
    }

    /**
     * Get the type of this charge line.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(AccountsTenantChargeLineType::class, 'tenant_charge_line_type', 'tenant_charge_line_type_id');
    }

    /**
     * Get the employee who created this charge line.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_line_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this charge line.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_charge_line_updated_by', 'employee_id');
    }
}