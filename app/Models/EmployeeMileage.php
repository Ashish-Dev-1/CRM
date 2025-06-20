<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeMileage extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_mileage_created_by', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_mileage_employee_id', 'employee_id');
    }

    /**
     * Get the Vehicle associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class, 'employee_mileage_vehicle_id', 'vehicle_id');
    }
}
