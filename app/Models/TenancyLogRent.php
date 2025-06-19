<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenancyLogRent extends Model
{
    protected $table = 'tenancy_log_rent';
    protected $primaryKey = 'tenancy_log_rent_id';
    public $timestamps = false;

    protected $fillable = [
        'tenancy_log_rent_tenancy',
        'tenancy_log_rent_date',
        'tenancy_log_rent_old',
        'tenancy_log_rent_new',
        'tenancy_log_rent_notes',
        'tenancy_log_rent_date_created',
        'tenancy_log_rent_date_updated',
        'tenancy_log_rent_created_by',
        'tenancy_log_rent_updated_by',
    ];

    protected $dates = [
        'tenancy_log_rent_date',
        'tenancy_log_rent_date_created',
        'tenancy_log_rent_date_updated',
    ];

    /**
     * Get the tenancy that this rent log belongs to.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_log_rent_tenancy', 'tenancy_id');
    }

    /**
     * Get the employee who created this rent log record.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_log_rent_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this rent log record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_log_rent_updated_by', 'employee_id');
    }
}