<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeysTransactionDelet extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'keys_transaction_created_by', 'employee_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'keys_transaction_property', 'property_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'keys_transaction_updated_by', 'employee_id');
    }
}
