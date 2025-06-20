<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationTaskDefaults extends Model
{
    //

    /**
     * Get the ApplicationTaskType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(ApplicationTaskType::class, 'application_task_defaults_type', 'application_task_type_id');
    }

    /**
     * Get the ApplicationTaskStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(ApplicationTaskStatus::class, 'application_task_defaults_status', 'application_task_status_id');
    }
}
