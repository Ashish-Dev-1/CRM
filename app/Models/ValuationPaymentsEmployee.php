<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationPaymentsEmployee extends Model
{
    //

    /**
     * Get the Valuation associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Valuation::class, 'valuation_payments_employee_valuation_id', 'valuation_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_payments_employee_employee_id', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_payments_employee_created_by', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_payments_employee_updated_by', 'employee_id');
    }

    /**
     * Get the ReferralPaymentType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(ReferralPaymentType::class, 'valuation_payments_employee_payment_type', 'referral_payment_type_id');
    }
}
