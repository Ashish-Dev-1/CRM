<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeToRole extends Model
{
    protected $table = 'employee_to_role';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'employee_id',
        'employee_role_id',
    ];

    protected $casts = [
        'employee_id' => 'integer',
        'employee_role_id' => 'integer',
    ];

    /**
     * Get the employee for this role assignment.
     */
    

    /**
     * Get the role for this assignment.
     */
    

    /**
     * Get the Employee associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }

    /**
     * Get the EmployeeRole associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(EmployeeRole::class, 'employee_role_id', 'employee_role_id');
    }
}