<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Employee extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'employee_id';
    public $timestamps = false;

        protected $fillable = [
        'company_id',
        'employee_token',
        'employee_title',
        'employee_first_name',
        'employee_surname',
        'employee_mobile_number',
        'employee_mobile_number_work',
        'employee_direct_line',
        'employee_internal_extension',
        'employee_email_address',
        'employee_email_address_personal',
        'employee_job_title',
        'employee_branch_id',
        'employee_default_vehicle_id',
        'employee_username',
        'employee_password',
        'employee_status',
        'employee_payroll_status',
        'employee_login_status',
        'employee_dob',
        'employee_first_login_log',
        'employee_line_manager',
        'employee_line_manager_annual_leave',
        'employee_line_manager_first_login',
        'employee_email_password',
        'employee_holiday_allowance',
        'employee_negotiator_percentage_split',
        'employee_lunch_break',
        'employee_lunch_break_minutes',
        'employee_annual_leave_cover',
        'employee_working_hours',
        'employee_start_date',
        'employee_average_hours_worked_per_week',
        'employee_average_days_worked_per_week',
        'employee_annual_leave_active',
        'employee_annual_leave_accrual_method',
        'employee_hostname',
        'employee_image_filename',
        'employee_email_default_new_valuation_arranged',
    ];

    protected $casts = [
        'company_id' => 'integer',
        'employee_title' => 'integer',
        'employee_branch_id' => 'integer',
        'employee_default_vehicle_id' => 'integer',
        'employee_status' => 'integer',
        'employee_payroll_status' => 'boolean',
        'employee_login_status' => 'boolean',
        'employee_dob' => 'date',
        'employee_first_login_log' => 'integer',
        'employee_line_manager' => 'integer',
        'employee_line_manager_annual_leave' => 'integer',
        'employee_line_manager_first_login' => 'integer',
        'employee_holiday_allowance' => 'decimal:2',
        'employee_negotiator_percentage_split' => 'integer',
        'employee_lunch_break_minutes' => 'integer',
        'employee_annual_leave_cover' => 'integer',
        'employee_start_date' => 'date',
        'employee_average_hours_worked_per_week' => 'decimal:2',
        'employee_average_days_worked_per_week' => 'decimal:2',
        'employee_annual_leave_active' => 'integer',
        'employee_annual_leave_accrual_method' => 'integer',
        'employee_email_default_new_valuation_arranged' => 'boolean',
    ];

    protected $dates = [
        'employee_dob',
        'employee_start_date',
    ];

    /**
     * Get the company that the employee belongs to.
     */
    

    /**
     * Get the branch that the employee belongs to.
     */
    

    /**
     * Get the title of the employee.
     */
    

    /**
     * Get the default vehicle of the employee.
     */
    

    /**
     * Get the line manager of the employee.
     */
    

    /**
     * Get the annual leave manager of the employee.
     */
    

    /**
     * Get the first login manager of the employee.
     */
    

    /**
     * Get the annual leave cover of the employee.
     */
    

    /**
     * Get the annual leave accrual method of the employee.
     */
    

    /**
     * Get the employees that have this employee as their line manager.
     */
    

    /**
     * Get the employees that have this employee as their annual leave manager.
     */
    

    /**
     * Get the departments that the employee belongs to.
     */
    

    /**
     * Get the roles that the employee has.
     */
    

    /**
     * Get the permissions that the employee has.
     */
    

    /**
     * Get the Branch associated with this record.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'employee_branch_id', 'branch_id');
    }

    /**
     * Get the Vehicle associated with this record.
     */
    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class, 'employee_default_vehicle_id', 'vehicle_id');
    }

    /**
     * Get the Title associated with this record.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'employee_title', 'title_id');
    }

    /**
     * Get the Company associated with this record.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function manager(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_line_manager', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function leave(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_line_manager_annual_leave', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function login(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_line_manager_first_login', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function cover(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_annual_leave_cover', 'employee_id');
    }

    /**
     * Get the AnnualLeaveAccrualMethod associated with this record.
     */
    public function method(): BelongsTo
    {
        return $this->belongsTo(AnnualLeaveAccrualMethod::class, 'employee_annual_leave_accrual_method', 'annual_leave_accrual_method_id');
    }
}