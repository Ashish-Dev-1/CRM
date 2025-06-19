<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccountsTransaction extends Model
{
    protected $table = 'accounts_transaction';
    protected $primaryKey = 'transaction_id';
    public $timestamps = false;

    protected $fillable = [
        'transaction_date',
        'transaction_type',
        'transaction_reference',
        'transaction_amount',
        'transaction_description',
        'transaction_notes',
        'transaction_batch',
        'transaction_property',
        'transaction_tenancy',
        'transaction_landlord',
        'transaction_vendor',
        'transaction_buyer',
        'transaction_directory',
        'transaction_employee',
        'transaction_date_created',
        'transaction_date_updated',
        'transaction_created_by',
        'transaction_updated_by',
    ];

    protected $dates = [
        'transaction_date',
        'transaction_date_created',
        'transaction_date_updated',
    ];

    /**
     * Get the transaction type.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(AccountsTransactionType::class, 'transaction_type', 'transaction_type_id');
    }

    /**
     * Get the property associated with this transaction.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'transaction_property', 'property_id');
    }

    /**
     * Get the tenancy associated with this transaction.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'transaction_tenancy', 'tenancy_id');
    }

    /**
     * Get the landlord associated with this transaction.
     */
    public function landlord(): BelongsTo
    {
        return $this->belongsTo(Landlord::class, 'transaction_landlord', 'landlord_id');
    }

    /**
     * Get the vendor associated with this transaction.
     */
    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class, 'transaction_vendor', 'vendor_id');
    }

    /**
     * Get the buyer associated with this transaction.
     */
    public function buyer(): BelongsTo
    {
        return $this->belongsTo(Buyer::class, 'transaction_buyer', 'buyer_id');
    }

    /**
     * Get the directory entry (contractor/supplier) associated with this transaction.
     */
    public function directory(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'transaction_directory', 'directory_id');
    }

    /**
     * Get the employee associated with this transaction.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'transaction_employee', 'employee_id');
    }

    /**
     * Get the employee who created this transaction.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'transaction_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this transaction.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'transaction_updated_by', 'employee_id');
    }
}