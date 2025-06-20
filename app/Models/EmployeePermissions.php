<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EmployeePermissions extends Model
{
    protected $table = 'employee_permissions';
    protected $primaryKey = 'tinyInteger';
    public $timestamps = false;

        protected $fillable = [
        'employee_permissions_name',
        'employee_permissions_category',
    ];

    protected $casts = [
        'employee_permissions_category' => 'integer',
    ];

    /**
     * Get the category for this permission.
     */
    

    /**
     * Get the employees that have this permission directly assigned.
     */
    

    /**
     * Get the roles that have this permission.
     */
    

    /**
     * Get the EmployeePermissionsCategory associated with this record.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(EmployeePermissionsCategory::class, 'employee_permissions_category', 'employee_permissions_category_id');
    }
}