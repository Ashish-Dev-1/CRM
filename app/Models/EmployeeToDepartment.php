<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeToDepartment extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }

    /**
     * Get the EmployeeDepartment associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(EmployeeDepartment::class, 'employee_department_id', 'employee_department_id');
    }
}
