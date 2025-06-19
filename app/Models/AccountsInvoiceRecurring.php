<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoiceRecurring extends Model
{
    protected $table = 'accounts_invoice_recurring';
    protected $primaryKey = 'invoice_recurring_id';
    public $timestamps = false;

    protected $fillable = [
        'invoice_recurring_token',
        'invoice_recurring_title',
        'invoice_recurring_client_type',
        'invoice_recurring_client_id',
        'invoice_recurring_property',
        'invoice_recurring_tenancy',
        'invoice_recurring_nominal_code',
        'invoice_recurring_frequency',
        'invoice_recurring_frequency_unit',
        'invoice_recurring_next_date',
        'invoice_recurring_start_date',
        'invoice_recurring_end_date',
        'invoice_recurring_status',
        'invoice_recurring_branch',
        'invoice_recurring_date_created',
        'invoice_recurring_date_updated',
        'invoice_recurring_created_by',
        'invoice_recurring_updated_by',
    ];

    protected $dates = [
        'invoice_recurring_next_date',
        'invoice_recurring_start_date',
        'invoice_recurring_end_date',
        'invoice_recurring_date_created',
        'invoice_recurring_date_updated',
    ];

    /**
     * Get the property associated with this recurring invoice.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'invoice_recurring_property', 'property_id');
    }

    /**
     * Get the tenancy associated with this recurring invoice.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'invoice_recurring_tenancy', 'tenancy_id');
    }

    /**
     * Get the nominal code for this recurring invoice.
     */
    public function nominalCode(): BelongsTo
    {
        return $this->belongsTo(AccountsNominalCode::class, 'invoice_recurring_nominal_code', 'nominal_code_id');
    }

    /**
     * Get the frequency unit for this recurring invoice.
     */
    public function frequencyUnit(): BelongsTo
    {
        return $this->belongsTo(AccountsRecurringFrequencyUnit::class, 'invoice_recurring_frequency_unit', 'recurring_frequency_unit_id');
    }

    /**
     * Get the branch associated with this recurring invoice.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'invoice_recurring_branch', 'branch_id');
    }

    /**
     * Get the employee who created this recurring invoice.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_recurring_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this recurring invoice.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_recurring_updated_by', 'employee_id');
    }

    /**
     * Get the invoices generated from this recurring invoice.
     */
    public function generatedInvoices(): HasMany
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_recurring', 'invoice_recurring_id');
    }
}