<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenancyAllowedOccupant extends Model
{
    protected $table = 'tenancy_allowed_occupant';
    protected $primaryKey = 'tenancy_allowed_occupant_id';
    public $timestamps = false;

    protected $fillable = [
        'tenancy_allowed_occupant_tenancy',
        'tenancy_allowed_occupant_name',
        'tenancy_allowed_occupant_relationship',
        'tenancy_allowed_occupant_age',
        'tenancy_allowed_occupant_date_created',
        'tenancy_allowed_occupant_date_updated',
        'tenancy_allowed_occupant_created_by',
        'tenancy_allowed_occupant_updated_by',
    ];

    protected $dates = [
        'tenancy_allowed_occupant_date_created',
        'tenancy_allowed_occupant_date_updated',
    ];

    /**
     * Get the tenancy that this occupant belongs to.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_allowed_occupant_tenancy', 'tenancy_id');
    }

    /**
     * Get the employee who created this occupant.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_allowed_occupant_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this occupant.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_allowed_occupant_updated_by', 'employee_id');
    }
}