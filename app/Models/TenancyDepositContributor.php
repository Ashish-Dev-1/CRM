<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenancyDepositContributor extends Model
{
    protected $table = 'tenancy_deposit_contributor';
    protected $primaryKey = 'tenancy_deposit_contributor_id';
    public $timestamps = false;

    protected $fillable = [
        'tenancy_deposit_contributor_tenancy',
        'tenancy_deposit_contributor_name',
        'tenancy_deposit_contributor_amount',
        'tenancy_deposit_contributor_date_created',
        'tenancy_deposit_contributor_date_updated',
        'tenancy_deposit_contributor_created_by',
        'tenancy_deposit_contributor_updated_by',
    ];

    protected $dates = [
        'tenancy_deposit_contributor_date_created',
        'tenancy_deposit_contributor_date_updated',
    ];

    /**
     * Get the tenancy that this deposit contributor belongs to.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_deposit_contributor_tenancy', 'tenancy_id');
    }

    /**
     * Get the employee who created this deposit contributor.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_deposit_contributor_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this deposit contributor.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_deposit_contributor_updated_by', 'employee_id');
    }
}