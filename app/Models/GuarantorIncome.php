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
        'guarantor_income_id',
        'guarantor_income_guarantor_id',
        'guarantor_income_amount',
        'guarantor_income_frequency',
        'guarantor_income_source',
    ];

    protected $casts = [
        'guarantor_income_guarantor_id' => 'integer',
        'guarantor_income_amount' => 'decimal:2',
        'guarantor_income_frequency' => 'integer',
    ];

    protected $dates = [
        'guarantor_income_date_created',
        'guarantor_income_date_updated',
    ];

    /**
     * Get the guarantor that owns the income record.
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
     * Get the Guarantor associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Guarantor::class, 'guarantor_income_guarantor_id', 'guarantor_id');
    }

    /**
     * Get the IncomeFrequency associated with this record.
     */
    public function frequency(): BelongsTo
    {
        return $this->belongsTo(IncomeFrequency::class, 'guarantor_income_frequency', 'income_frequency_id');
    }
}