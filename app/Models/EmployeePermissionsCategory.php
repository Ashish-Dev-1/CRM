<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EmployeePermissionsCategory extends Model
{
    protected $table = 'employee_permissions_category';
    protected $primaryKey = 'employee_permissions_category_id';
    public $timestamps = false;

    protected $fillable = [
        'employee_permissions_category_name',
        'employee_permissions_category_description',
        'employee_permissions_category_sort',
    ];

    /**
     * Get the permissions in this category.
     */
    public function permissions(): HasMany
    {
        return $this->hasMany(EmployeePermissions::class, 'employee_permissions_category', 'employee_permissions_category_id');
    }
}