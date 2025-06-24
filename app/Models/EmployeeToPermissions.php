<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeToPermissions extends Model
{
    protected $table = 'employee_to_permissions';
    
    public $timestamps = false;

        protected $fillable = [
        'employee_id',
        'employee_permissions_id',
    ];

    protected $casts = [
        'employee_id' => 'integer',
        'employee_permissions_id' => 'integer',
    ];

    /**
     * Get the employee for this permission assignment.
     */

    /**
     * Get the permission for this assignment.
     */

    /**
     * Get the Employee associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }

    /**
     * Get the EmployeePermissions associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(EmployeePermissions::class, 'employee_permissions_id', 'employee_permissions_id');
    }
}