<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationUpdates extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_updates_created_by', 'employee_id');
    }

    /**
     * Get the Valuation associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Valuation::class, 'valuation_updates_valuation_id', 'valuation_id');
    }
}
