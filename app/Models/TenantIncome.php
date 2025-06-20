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
        'tenant_income_id',
        'tenant_income_tenant_id',
        'tenant_income_amount',
        'tenant_income_frequency',
        'tenant_income_source',
    ];

    protected $casts = [
        'tenant_income_amount' => 'decimal:2',
        'tenant_income_frequency' => 'integer',
    ];

    protected $dates = [
        'tenant_income_date_created',
        'tenant_income_date_updated',
    ];

    /**
     * Get the tenant that owns the income record.
     */
    

    /**
     * Get the frequency of the income.
     */
    

    /**
     * Get the employee who created the income record.
     */
    

    /**
     * Get the employee who updated the income record.
     */
    

    /**
     * Get the Tenant associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Tenant::class, 'tenant_income_tenant_id', 'tenant_id');
    }

    /**
     * Get the IncomeFrequency associated with this record.
     */
    public function frequency(): BelongsTo
    {
        return $this->belongsTo(IncomeFrequency::class, 'tenant_income_frequency', 'income_frequency_id');
    }
}