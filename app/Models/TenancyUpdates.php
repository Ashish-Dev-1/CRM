<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TenancyUpdates extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_updates_created_by', 'employee_id');
    }

    /**
     * Get the Tenancy associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_updates_tenancy_id', 'tenancy_id');
    }
}
