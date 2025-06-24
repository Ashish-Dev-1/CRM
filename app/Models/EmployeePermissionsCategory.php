<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EmployeePermissionsCategory extends Model
{
    protected $table = 'employee_permissions_category';
    
    public $timestamps = false;

        protected $fillable = [
        'employee_permissions_category_name',
        'employee_permissions_category_sort',
    ];

    protected $casts = [
        'employee_permissions_category_sort' => 'integer',
    ];

    /**
     * Get the permissions in this category.
     */
    
}