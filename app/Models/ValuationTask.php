<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationTask extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_task_updated_by', 'employee_id');
    }

    /**
     * Get the ValuationTaskStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(ValuationTaskStatus::class, 'valuation_task_status', 'valuation_task_status_id');
    }

    /**
     * Get the Valuation associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Valuation::class, 'valuation_id', 'valuation_id');
    }
}
