<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeToRole extends Model
{
    protected $table = 'employee_to_role';
    protected $primaryKey = 'employee_to_role_id';
    public $timestamps = false;

    protected $fillable = [
        'employee_id',
        'employee_role_id',
    ];

    /**
     * Get the employee for this role assignment.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }

    /**
     * Get the role for this assignment.
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(EmployeeRole::class, 'employee_role_id', 'employee_role_id');
    }
}