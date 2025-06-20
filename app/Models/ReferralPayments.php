<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferralPayments extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'referral_payments_created_by', 'employee_id');
    }

    /**
     * Get the Referral associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Referral::class, 'referral_payments_referral_id', 'referral_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'referral_payments_updated_by', 'employee_id');
    }
}
