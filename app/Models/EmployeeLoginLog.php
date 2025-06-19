<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeLoginLog extends Model
{
    protected $table = 'employee_login_log';
    protected $primaryKey = 'employee_login_log_id';
    public $timestamps = false;

    protected $fillable = [
        'employee_login_log_employee',
        'employee_login_log_date',
        'employee_login_log_success',
        'employee_login_log_ip_address',
        'employee_login_log_user_agent',
    ];

    protected $dates = [
        'employee_login_log_date',
    ];

    /**
     * Get the employee associated with this login log.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_login_log_employee', 'employee_id');
    }
}