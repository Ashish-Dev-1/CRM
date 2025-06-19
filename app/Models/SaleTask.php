<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaleTask extends Model
{
    protected $table = 'sale_task';
    protected $primaryKey = 'sale_task_id';
    public $timestamps = false;

    protected $fillable = [
        'sale_task_sale',
        'sale_task_type',
        'sale_task_title',
        'sale_task_description',
        'sale_task_date',
        'sale_task_status',
        'sale_task_employee',
        'sale_task_date_created',
        'sale_task_date_updated',
        'sale_task_created_by',
        'sale_task_updated_by',
    ];

    protected $dates = [
        'sale_task_date',
        'sale_task_date_created',
        'sale_task_date_updated',
    ];

    /**
     * Get the sale that this task belongs to.
     */
    public function sale(): BelongsTo
    {
        return $this->belongsTo(Sale::class, 'sale_task_sale', 'sale_id');
    }

    /**
     * Get the type of this task.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(SaleTaskType::class, 'sale_task_type', 'sale_task_type_id');
    }

    /**
     * Get the status of this task.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(SaleTaskStatus::class, 'sale_task_status', 'sale_task_status_id');
    }

    /**
     * Get the employee assigned to this task.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_task_employee', 'employee_id');
    }

    /**
     * Get the employee who created this task.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_task_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this task.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_task_updated_by', 'employee_id');
    }
}