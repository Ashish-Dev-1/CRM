<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoice extends Model
{
    protected $table = 'accounts_invoice';
    protected $primaryKey = 'invoice_id';
    public $timestamps = false;

    protected $fillable = [
        'invoice_token',
        'invoice_number',
        'invoice_date',
        'invoice_due_date',
        'invoice_status',
        'invoice_client_type',
        'invoice_client_id',
        // ...other fields...
    ];

    protected $dates = [
        'invoice_date',
        'invoice_due_date',
        'invoice_date_created',
        'invoice_date_updated',
    ];

    /**
     * Get the status of the invoice.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoiceStatus::class, 'invoice_status', 'invoice_status_id');
    }

    /**
     * Get the property associated with the invoice.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'invoice_property', 'property_id');
    }

    /**
     * Get the tenancy associated with the invoice.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'invoice_tenancy', 'tenancy_id');
    }

    /**
     * Get the nominal code for the invoice.
     */
    public function nominalCode(): BelongsTo
    {
        return $this->belongsTo(AccountsNominalCode::class, 'invoice_nominal_code', 'nominal_code_id');
    }

    /**
     * Get the branch associated with the invoice.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'invoice_branch', 'branch_id');
    }

    /**
     * Get the employee who created the invoice.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the invoice.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_updated_by', 'employee_id');
    }

    /**
     * Get the invoice lines for the invoice.
     */
    public function lines(): HasMany
    {
        return $this->hasMany(AccountsInvoiceLine::class, 'invoice_line_invoice', 'invoice_id');
    }

    /**
     * Get the payments for the invoice.
     */
    public function payments(): HasMany
    {
        return $this->hasMany(AccountsInvoicePayment::class, 'invoice_payment_invoice', 'invoice_id');
    }

    /**
     * Get the updates for the invoice.
     */
    public function updates(): HasMany
    {
        return $this->hasMany(InvoiceUpdate::class, 'invoice_updates_invoice', 'invoice_id');
    }

    /**
     * Get the related credit notes for this invoice.
     */
    public function creditNotes(): HasMany
    {
        return $this->hasMany(AccountsInvoiceCredit::class, 'invoice_credit_invoice', 'invoice_id');
    }
}