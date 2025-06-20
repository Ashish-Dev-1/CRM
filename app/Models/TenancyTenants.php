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
        'tenancy_tenants_id',
        'tenant_id',
        'tenancy_id',
        'tenant_lead',
        'property_id',
    ];

    protected $casts = [
        'tenant_lead' => 'integer',
    ];

    protected $dates = [
        'tenancy_tenants_date_created',
        'tenancy_tenants_date_updated',
    ];

    /**
     * Get the tenancy that owns the tenant relationship.
     */
    

    /**
     * Get the tenant associated with the tenancy.
     */
    

    /**
     * Get the employee who created the tenancy tenant record.
     */
    

    /**
     * Get the employee who updated the tenancy tenant record.
     */
    

    /**
     * Get the Tenant associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Tenant::class, 'tenant_id', 'tenant_id');
    }

    /**
     * Get the Tenancy associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_id', 'tenancy_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}