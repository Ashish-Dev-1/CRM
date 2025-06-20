<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $table = 'task';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'task_description',
        'task_date_tbc',
        'task_deadline',
        'task_routine',
        'task_status',
        'task_sort',
        'task_date_created',
        'task_created_by',
    ];

    protected $casts = [
        'task_date_tbc' => 'date',
        'task_deadline' => 'date',
        'task_routine' => 'integer',
        'task_status' => 'integer',
        'task_sort' => 'integer',
        'task_date_created' => 'datetime',
        'task_created_by' => 'integer',
    ];

        protected $dates = [
        'task_date_tbc',
        'task_deadline',
        'task_date_created',
    ];

    /**
     * Get the status of the task.
     */
    

    /**
     * Get the employee related to the task.
     */
    

    /**
     * Get the employee assigned to the task.
     */
    

    /**
     * Get the employee who created the task.
     */
    

    /**
     * Get the employee who updated the task.
     */
    

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'task_created_by', 'employee_id');
    }

    /**
     * Get the TaskStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(TaskStatus::class, 'task_status', 'task_status_id');
    }
}