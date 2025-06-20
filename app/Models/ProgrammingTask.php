<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgrammingTask extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'programming_task_created_by', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'programming_task_updated_by', 'employee_id');
    }

    /**
     * Get the ProgrammingTaskStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(ProgrammingTaskStatus::class, 'programming_task_status', 'programming_task_status_id');
    }
}
