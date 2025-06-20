<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationLogStatus extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_updated_by', 'employee_id');
    }

    /**
     * Get the Valuation associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Valuation::class, 'valuation_id', 'valuation_id');
    }

    /**
     * Get the ValuationStatus associated with this record.
     */
    public function old(): BelongsTo
    {
        return $this->belongsTo(ValuationStatus::class, 'valuation_status_old', 'valuation_status_id');
    }

    /**
     * Get the ValuationStatus associated with this record.
     */
    public function new(): BelongsTo
    {
        return $this->belongsTo(ValuationStatus::class, 'valuation_status_new', 'valuation_status_id');
    }
}
