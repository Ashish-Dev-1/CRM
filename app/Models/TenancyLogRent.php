<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TenancyLogRent extends Model
{
    protected $table = 'tenancy_log_rent';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'tenancy_log_rent_tenancy_id',
        'tenancy_rent_old',
        'tenancy_rent_new',
        'tenancy_log_rent_notes',
        'tenancy_log_rent_date_updated',
        'tenancy_log_rent_updated_by',
    ];

    protected $casts = [
        'tenancy_log_rent_tenancy_id' => 'integer',
        'tenancy_rent_old' => 'decimal:2',
        'tenancy_rent_new' => 'decimal:2',
        'tenancy_log_rent_date_updated' => 'date',
        'tenancy_log_rent_updated_by' => 'integer',
    ];

        protected $dates = [
        'tenancy_log_rent_date_updated',
    ];

    /**
     * Get the tenancy that this rent log belongs to.
     */
    

    /**
     * Get the employee who created this rent log record.
     */
    

    /**
     * Get the employee who updated this rent log record.
     */
    

    /**
     * Get the Tenancy associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_log_rent_tenancy_id', 'tenancy_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_log_rent_updated_by', 'employee_id');
    }
}