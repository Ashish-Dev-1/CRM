<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IncomeFrequency extends Model
{
    protected $table = 'income_frequency';
    protected $primaryKey = 'income_frequency_id';
    public $timestamps = false;

    protected $fillable = [
        'income_frequency_name',
        'income_frequency_description',
        'income_frequency_sort',
    ];

    /**
     * Get the tenant income records with this frequency.
     */
    public function tenantIncomes(): HasMany
    {
        return $this->hasMany(TenantIncome::class, 'tenant_income_frequency', 'income_frequency_id');
    }

    /**
     * Get the guarantor income records with this frequency.
     */
    public function guarantorIncomes(): HasMany
    {
        return $this->hasMany(GuarantorIncome::class, 'guarantor_income_frequency', 'income_frequency_id');
    }
}