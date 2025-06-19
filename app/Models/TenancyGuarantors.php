<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenancyGuarantors extends Model
{
    protected $table = 'tenancy_guarantors';
    protected $primaryKey = 'tenancy_guarantors_id';
    public $timestamps = false;

    protected $fillable = [
        'tenancy_guarantors_tenancy',
        'tenancy_guarantors_guarantor',
        'tenancy_guarantors_date_created',
        'tenancy_guarantors_date_updated',
        'tenancy_guarantors_created_by',
        'tenancy_guarantors_updated_by',
    ];

    protected $dates = [
        'tenancy_guarantors_date_created',
        'tenancy_guarantors_date_updated',
    ];

    /**
     * Get the tenancy that the guarantor is associated with.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_guarantors_tenancy', 'tenancy_id');
    }

    /**
     * Get the guarantor associated with the tenancy.
     */
    public function guarantor(): BelongsTo
    {
        return $this->belongsTo(Guarantor::class, 'tenancy_guarantors_guarantor', 'guarantor_id');
    }

    /**
     * Get the employee who created the tenancy guarantor record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_guarantors_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the tenancy guarantor record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_guarantors_updated_by', 'employee_id');
    }
}