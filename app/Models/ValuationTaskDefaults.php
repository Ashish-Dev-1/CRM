<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValuationTaskDefaults extends Model
{
    //

    /**
     * Get the ValuationTaskStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(ValuationTaskStatus::class, 'valuation_task_defaults_status', 'valuation_task_status_id');
    }
}
