<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EmployeeRole extends Model
{
    protected $table = 'employee_role';
    protected $primaryKey = 'employee_role_id';
    public $timestamps = false;

    protected $fillable = [
        'employee_role_name',
        'employee_role_description',
    ];

    /**
     * Get the employees that have this role.
     */
    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(
            Employee::class,
            'employee_to_role',
            'employee_role_id',
            'employee_id'
        );
    }

    /**
     * Get the permissions associated with this role.
     */
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(
            EmployeePermissions::class,
            'role_to_permissions',
            'employee_role_id',
            'employee_permissions_id'
        );
    }
}