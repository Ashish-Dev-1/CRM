<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenancyTenants extends Model
{
    protected $table = 'tenancy_tenants';
    protected $primaryKey = 'tenancy_tenants_id';
    public $timestamps = false;

    protected $fillable = [
        'tenancy_tenants_tenancy',
        'tenancy_tenants_tenant',
        'tenancy_tenants_lead',
        'tenancy_tenants_date_created',
        'tenancy_tenants_date_updated',
        'tenancy_tenants_created_by',
        'tenancy_tenants_updated_by',
    ];

    protected $dates = [
        'tenancy_tenants_date_created',
        'tenancy_tenants_date_updated',
    ];

    /**
     * Get the tenancy that owns the tenant relationship.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_tenants_tenancy', 'tenancy_id');
    }

    /**
     * Get the tenant associated with the tenancy.
     */
    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class, 'tenancy_tenants_tenant', 'tenant_id');
    }

    /**
     * Get the employee who created the tenancy tenant record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_tenants_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the tenancy tenant record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_tenants_updated_by', 'employee_id');
    }
}