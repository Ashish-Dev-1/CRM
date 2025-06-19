<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsBacsFile extends Model
{
    protected $table = 'accounts_bacs_file';
    protected $primaryKey = 'bacs_file_id';
    public $timestamps = false;

    protected $fillable = [
        'bacs_file_branch',
        'bacs_file_date',
        'bacs_file_reference',
        'bacs_file_filename',
        'bacs_file_date_created',
        'bacs_file_date_updated',
        'bacs_file_created_by',
        'bacs_file_updated_by',
    ];

    protected $dates = [
        'bacs_file_date',
        'bacs_file_date_created',
        'bacs_file_date_updated',
    ];

    /**
     * Get the branch associated with this BACS file.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'bacs_file_branch', 'branch_id');
    }

    /**
     * Get the employee who created this BACS file.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'bacs_file_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this BACS file.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'bacs_file_updated_by', 'employee_id');
    }

    /**
     * Get the landlord payments included in this BACS file.
     */
    public function landlordPayments(): HasMany
    {
        return $this->hasMany(AccountsLandlordPayment::class, 'landlord_payment_bacs_file', 'bacs_file_id');
    }
}