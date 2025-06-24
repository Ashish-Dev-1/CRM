<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EmployeeRole extends Model
{
    protected $table = 'employee_role';
    
    public $timestamps = false;

        protected $fillable = [
        'employee_role_name',
    ];

    /**
     * Get the employees that have this role.
     */

    /**
     * Get the permissions associated with this role.
     */
    
}