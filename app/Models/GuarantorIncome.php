<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GuarantorIncome extends Model
{
    protected $table = 'guarantor_income';
    protected $primaryKey = 'guarantor_income_id';
    public $timestamps = false;

    protected $fillable = [
        'guarantor_income_guarantor',
        'guarantor_income_amount',
        'guarantor_income_frequency',
        'guarantor_income_date_created',
        'guarantor_income_date_updated',
        'guarantor_income_created_by',
        'guarantor_income_updated_by',
    ];

    protected $dates = [
        'guarantor_income_date_created',
        'guarantor_income_date_updated',
    ];

    /**
     * Get the guarantor that owns the income record.
     */
    public function guarantor(): BelongsTo
    {
        return $this->belongsTo(Guarantor::class, 'guarantor_income_guarantor', 'guarantor_id');
    }

    /**
     * Get the frequency of the income.
     */
    public function frequency(): BelongsTo
    {
        return $this->belongsTo(IncomeFrequency::class, 'guarantor_income_frequency', 'income_frequency_id');
    }

    /**
     * Get the employee who created the income record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'guarantor_income_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the income record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'guarantor_income_updated_by', 'employee_id');
    }
}