<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleUpdates extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'sale_updates_created_by', 'employee_id');
    }

    /**
     * Get the Sale associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Sale::class, 'sale_updates_sale_id', 'sale_id');
    }
}
