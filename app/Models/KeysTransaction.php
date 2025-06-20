<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeysTransaction extends Model
{
    //

    /**
     * Get the CustomerType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(CustomerType::class, 'keys_transaction_client_type', 'customer_type_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'keys_transaction_created_by', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'keys_transaction_employee', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'keys_transaction_in_employee', 'employee_id');
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

    /**
     * Get the KeysAdd associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(KeysAdd::class, 'keys_transaction_set_id', 'keys_add_id');
    }
}
