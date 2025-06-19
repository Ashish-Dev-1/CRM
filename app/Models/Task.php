<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    protected $table = 'task';
    protected $primaryKey = 'task_id';
    public $timestamps = false;

    protected $fillable = [
        'task_title',
        'task_description',
        'task_date',
        'task_status',
        'task_employee',
        'task_employee_assigned_to',
        'task_date_created',
        'task_date_updated',
        'task_created_by',
        'task_updated_by',
    ];

    protected $dates = [
        'task_date',
        'task_date_created',
        'task_date_updated',
    ];

    /**
     * Get the status of the task.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(TaskStatus::class, 'task_status', 'task_status_id');
    }

    /**
     * Get the employee related to the task.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'task_employee', 'employee_id');
    }

    /**
     * Get the employee assigned to the task.
     */
    public function assignedTo(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'task_employee_assigned_to', 'employee_id');
    }

    /**
     * Get the employee who created the task.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'task_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the task.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'task_updated_by', 'employee_id');
    }
}