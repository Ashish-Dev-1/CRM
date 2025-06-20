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
        'invoice_customer_type',
        'invoice_customer',
        'invoice_date',
        'invoice_due_date',
        'invoice_property_id',
        'invoice_development_id',
        'invoice_tenancy_id',
        'invoice_branch',
        'invoice_payment_terms',
        'invoice_notes',
        'invoice_total_amount_exc_vat',
        'invoice_total_vat_amount',
        'invoice_total_amount_paid',
        'invoice_posted',
        'invoice_overdue_reminders',
        'invoice_date_created',
        'invoice_date_updated',
        'invoice_date_posted',
        'invoice_created_by',
        'invoice_updated_by',
        'invoice_posted_by',
    ];

    protected $dates = [
        'invoice_date',
        'invoice_due_date',
        'invoice_date_created',
        'invoice_date_updated',
        'invoice_date_posted',
    ];

    protected $casts = [
        'invoice_customer_type' => 'integer',
        'invoice_customer' => 'integer',
        'invoice_date' => 'date',
        'invoice_due_date' => 'date',
        'invoice_property_id' => 'integer',
        'invoice_development_id' => 'integer',
        'invoice_tenancy_id' => 'integer',
        'invoice_branch' => 'integer',
        'invoice_payment_terms' => 'integer',
        'invoice_total_amount_exc_vat' => 'decimal:2',
        'invoice_total_vat_amount' => 'decimal:2',
        'invoice_total_amount_paid' => 'decimal:2',
        'invoice_posted' => 'integer',
        'invoice_overdue_reminders' => 'integer',
        'invoice_date_created' => 'datetime',
        'invoice_date_updated' => 'datetime',
        'invoice_date_posted' => 'datetime',
        'invoice_created_by' => 'integer',
        'invoice_updated_by' => 'integer',
        'invoice_posted_by' => 'integer',
    ];

    /**
     * Get the customer type for the invoice.
     */
    public function customerType(): BelongsTo
    {
        return $this->belongsTo(CustomerType::class, 'invoice_customer_type', 'customer_type_id');
    }

    /**
     * Get the property associated with the invoice.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'invoice_property_id', 'property_id');
    }

    /**
     * Get the development associated with the invoice.
     */
    public function development(): BelongsTo
    {
        return $this->belongsTo(Development::class, 'invoice_development_id', 'development_id');
    }

    /**
     * Get the tenancy associated with the invoice.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'invoice_tenancy_id', 'tenancy_id');
    }

    /**
     * Get the branch associated with the invoice.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'invoice_branch', 'branch_id');
    }

    /**
     * Get the payment terms for the invoice.
     */
    public function paymentTerms(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentTerm::class, 'invoice_payment_terms', 'accounts_payment_term_id');
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
     * Get the employee who posted the invoice.
     */
    public function postedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_posted_by', 'employee_id');
    }

    /**
     * Get the invoice lines for the invoice.
     */
    public function lines(): HasMany
    {
        return $this->hasMany(AccountsInvoiceLine::class, 'invoice_id', 'invoice_id');
    }

    /**
     * Get the payments for the invoice.
     */
    public function payments(): HasMany
    {
        return $this->hasMany(AccountsInvoicePayment::class, 'invoice_payment_invoice_id', 'invoice_id');
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
        return $this->hasMany(AccountsInvoiceCredit::class, 'invoice_credit_invoice_id', 'invoice_id');
    }

    /**
     * Get the recurring invoices for this invoice.
     */
    public function recurring(): HasMany
    {
        return $this->hasMany(AccountsInvoiceRecurring::class, 'invoice_recurring_invoice_id', 'invoice_id');
    }
}