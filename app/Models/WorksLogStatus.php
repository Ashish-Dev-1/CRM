<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorksLogStatus extends Model
{
    protected $table = 'works_log_status';
    protected $primaryKey = 'works_log_status_id';
    public $timestamps = false;

        protected $fillable = [
        'works_log_status_id',
        'works_id',
        'works_status_old',
        'works_status_new',
        'works_updated_by',
        'works_date_updated',
    ];

    protected $casts = [
        'works_status_old' => 'integer',
        'works_status_new' => 'integer',
        'works_date_updated' => 'datetime',
    ];

        protected $dates = [
        'works_date_updated',
    ];

    

    

    

    

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'works_updated_by', 'employee_id');
    }

    /**
     * Get the Works associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Works::class, 'works_id', 'works_id');
    }

    /**
     * Get the WorksStatus associated with this record.
     */
    public function old(): BelongsTo
    {
        return $this->belongsTo(WorksStatus::class, 'works_status_old', 'works_status_id');
    }

    /**
     * Get the WorksStatus associated with this record.
     */
    public function new(): BelongsTo
    {
        return $this->belongsTo(WorksStatus::class, 'works_status_new', 'works_status_id');
    }
}
