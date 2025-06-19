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
        // ...other fields...
    ];

    /**
     * Get the company that the employee belongs to.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }

    /**
     * Get the branch that the employee belongs to.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'employee_branch_id', 'branch_id');
    }

    /**
     * Get the title of the employee.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'employee_title', 'title_id');
    }

    /**
     * Get the default vehicle of the employee.
     */
    public function defaultVehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class, 'employee_default_vehicle_id', 'vehicle_id');
    }

    /**
     * Get the line manager of the employee.
     */
    public function lineManager(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_line_manager', 'employee_id');
    }

    /**
     * Get the annual leave manager of the employee.
     */
    public function annualLeaveManager(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_line_manager_annual_leave', 'employee_id');
    }

    /**
     * Get the first login manager of the employee.
     */
    public function firstLoginManager(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_line_manager_first_login', 'employee_id');
    }

    /**
     * Get the annual leave cover of the employee.
     */
    public function annualLeaveCover(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_annual_leave_cover', 'employee_id');
    }

    /**
     * Get the annual leave accrual method of the employee.
     */
    public function annualLeaveAccrualMethod(): BelongsTo
    {
        return $this->belongsTo(AnnualLeaveAccrualMethod::class, 'employee_annual_leave_accrual_method', 'annual_leave_accrual_method_id');
    }

    /**
     * Get the employees that have this employee as their line manager.
     */
    public function managedEmployees(): HasMany
    {
        return $this->hasMany(Employee::class, 'employee_line_manager', 'employee_id');
    }

    /**
     * Get the employees that have this employee as their annual leave manager.
     */
    public function annualLeaveManagedEmployees(): HasMany
    {
        return $this->hasMany(Employee::class, 'employee_line_manager_annual_leave', 'employee_id');
    }

    /**
     * Get the departments that the employee belongs to.
     */
    public function departments(): BelongsToMany
    {
        return $this->belongsToMany(
            EmployeeDepartment::class,
            'employee_to_department',
            'employee_id',
            'employee_department_id'
        );
    }

    /**
     * Get the roles that the employee has.
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(
            EmployeeRole::class,
            'employee_to_role',
            'employee_id',
            'employee_role_id'
        );
    }

    /**
     * Get the permissions that the employee has.
     */
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(
            EmployeePermissions::class,
            'employee_to_permissions',
            'employee_id',
            'employee_permissions_id'
        );
    }
}