<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeLoginLog extends Model
{
    protected $table = 'employee_login_log';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'employee_login_log_employee_id',
        'employee_login_log_start_date_time',
        'employee_login_log_date_time',
        'employee_login_log_minutes_late',
        'employee_login_log_ip_address',
        'employee_login_log_notes',
        'employee_login_log_active',
        'employee_login_log_date_updated',
        'employee_login_log_updated_by',
    ];

    protected $casts = [
        'employee_login_log_employee_id' => 'integer',
        'employee_login_log_start_date_time' => 'datetime',
        'employee_login_log_date_time' => 'datetime',
        'employee_login_log_minutes_late' => 'integer',
        'employee_login_log_active' => 'integer',
        'employee_login_log_date_updated' => 'datetime',
        'employee_login_log_updated_by' => 'integer',
    ];

        protected $dates = [
        'employee_login_log_start_date_time',
        'employee_login_log_date_time',
        'employee_login_log_date_updated',
    ];

    /**
     * Get the employee associated with this login log.
     */
    

    /**
     * Get the Employee associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_login_log_employee_id', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_login_log_updated_by', 'employee_id');
    }
}