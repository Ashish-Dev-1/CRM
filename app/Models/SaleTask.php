<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaleTask extends Model
{
    protected $table = 'sale_task';
    
    public $timestamps = false;

        protected $fillable = [
        'sale_id',
        'sale_task_type',
        'sale_task_name',
        'sale_task_status',
        'sale_task_target_date',
        'sale_task_completed_date',
        'sale_task_notes',
        'sale_task_notes_private',
        'sale_task_sort',
        'sale_task_vendor_notified',
        'sale_task_buyer_notified',
        'sale_task_date_updated',
        'sale_task_updated_by',
    ];

    protected $casts = [
        'sale_id' => 'integer',
        'sale_task_type' => 'integer',
        'sale_task_status' => 'integer',
        'sale_task_target_date' => 'date',
        'sale_task_completed_date' => 'date',
        'sale_task_sort' => 'integer',
        'sale_task_vendor_notified' => 'integer',
        'sale_task_buyer_notified' => 'integer',
        'sale_task_date_updated' => 'datetime',
        'sale_task_updated_by' => 'integer',
    ];

        protected $dates = [
        'sale_task_target_date',
        'sale_task_completed_date',
        'sale_task_date_updated',
    ];

    /**
     * Get the sale that this task belongs to.
     */

    /**
     * Get the type of this task.
     */

    /**
     * Get the status of this task.
     */

    /**
     * Get the employee assigned to this task.
     */

    /**
     * Get the employee who created this task.
     */

    /**
     * Get the employee who updated this task.
     */

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_task_updated_by', 'employee_id');
    }

    /**
     * Get the Sale associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Sale::class, 'sale_id', 'sale_id');
    }

    /**
     * Get the SaleTaskType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(SaleTaskType::class, 'sale_task_type', 'sale_task_type_id');
    }

    /**
     * Get the SaleTaskStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(SaleTaskStatus::class, 'sale_task_status', 'sale_task_status_id');
    }
}