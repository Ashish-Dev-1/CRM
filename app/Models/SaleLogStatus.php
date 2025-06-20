<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleLogStatus extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_updated_by', 'employee_id');
    }

    /**
     * Get the Sale associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Sale::class, 'sale_id', 'sale_id');
    }

    /**
     * Get the SaleStatus associated with this record.
     */
    public function old(): BelongsTo
    {
        return $this->belongsTo(SaleStatus::class, 'sale_status_old', 'sale_status_id');
    }

    /**
     * Get the SaleStatus associated with this record.
     */
    public function new(): BelongsTo
    {
        return $this->belongsTo(SaleStatus::class, 'sale_status_new', 'sale_status_id');
    }
}
