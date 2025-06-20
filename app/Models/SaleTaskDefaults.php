<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleTaskDefaults extends Model
{
    //

    /**
     * Get the SaleTaskType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(SaleTaskType::class, 'sale_task_defaults_type', 'sale_task_type_id');
    }

    /**
     * Get the SaleTaskStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(SaleTaskStatus::class, 'sale_task_defaults_status', 'sale_task_status_id');
    }
}
