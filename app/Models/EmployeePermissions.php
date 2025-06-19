<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EmployeePermissions extends Model
{
    protected $table = 'employee_permissions';
    protected $primaryKey = 'employee_permissions_id';
    public $timestamps = false;

    protected $fillable = [
        'employee_permissions_name',
        'employee_permissions_description',
        'employee_permissions_category',
        'employee_permissions_sort',
    ];

    /**
     * Get the category for this permission.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(EmployeePermissionsCategory::class, 'employee_permissions_category', 'employee_permissions_category_id');
    }

    /**
     * Get the employees that have this permission directly assigned.
     */
    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(
            Employee::class,
            'employee_to_permissions',
            'employee_permissions_id',
            'employee_id'
        );
    }

    /**
     * Get the roles that have this permission.
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(
            EmployeeRole::class,
            'role_to_permissions',
            'employee_permissions_id',
            'employee_role_id'
        );
    }
}