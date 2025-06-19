<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenantIncome extends Model
{
    protected $table = 'tenant_income';
    protected $primaryKey = 'tenant_income_id';
    public $timestamps = false;

    protected $fillable = [
        'tenant_income_tenant',
        'tenant_income_amount',
        'tenant_income_frequency',
        'tenant_income_date_created',
        'tenant_income_date_updated',
        'tenant_income_created_by',
        'tenant_income_updated_by',
    ];

    protected $dates = [
        'tenant_income_date_created',
        'tenant_income_date_updated',
    ];

    /**
     * Get the tenant that owns the income record.
     */
    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class, 'tenant_income_tenant', 'tenant_id');
    }

    /**
     * Get the frequency of the income.
     */
    public function frequency(): BelongsTo
    {
        return $this->belongsTo(IncomeFrequency::class, 'tenant_income_frequency', 'income_frequency_id');
    }

    /**
     * Get the employee who created the income record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_income_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the income record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_income_updated_by', 'employee_id');
    }
}