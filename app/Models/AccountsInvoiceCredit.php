<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoiceCredit extends Model
{
    protected $table = 'accounts_invoice_credit';
    protected $primaryKey = 'invoice_credit_id';
    public $timestamps = false;

    protected $fillable = [
        'invoice_credit_token',
        'invoice_credit_customer_type',
        'invoice_credit_customer',
        'invoice_credit_date',
        'invoice_credit_property_id',
        'invoice_credit_development_id',
        'invoice_credit_tenancy_id',
        'invoice_credit_branch',
        'invoice_credit_notes',
        'invoice_credit_total_amount_exc_vat',
        'invoice_credit_total_vat_amount',
        'invoice_credit_posted',
        'invoice_credit_invoice_id',
        'invoice_credit_date_created',
        'invoice_credit_date_updated',
        'invoice_credit_date_posted',
        'invoice_credit_created_by',
        'invoice_credit_updated_by',
        'invoice_credit_posted_by',
    ];

    protected $casts = [
        'invoice_credit_customer_type' => 'integer',
        'invoice_credit_customer' => 'integer',
        'invoice_credit_date' => 'date',
        'invoice_credit_property_id' => 'integer',
        'invoice_credit_development_id' => 'integer',
        'invoice_credit_tenancy_id' => 'integer',
        'invoice_credit_branch' => 'integer',
        'invoice_credit_total_amount_exc_vat' => 'decimal:2',
        'invoice_credit_total_vat_amount' => 'decimal:2',
        'invoice_credit_posted' => 'integer',
        'invoice_credit_invoice_id' => 'integer',
        'invoice_credit_date_created' => 'datetime',
        'invoice_credit_date_updated' => 'datetime',
        'invoice_credit_date_posted' => 'datetime',
        'invoice_credit_created_by' => 'integer',
        'invoice_credit_updated_by' => 'integer',
        'invoice_credit_posted_by' => 'integer',
    ];

    protected $dates = [
        'invoice_credit_date',
        'invoice_credit_date_created',
        'invoice_credit_date_updated',
        'invoice_credit_date_posted',
    ];

    /**
     * Get the invoice that this credit note is for.
     */
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoice::class, 'invoice_credit_invoice_id', 'invoice_id');
    }

    /**
     * Get the customer type for this credit note.
     */
    public function customerType(): BelongsTo
    {
        return $this->belongsTo(CustomerType::class, 'invoice_credit_customer_type', 'customer_type_id');
    }

    /**
     * Get the property associated with this credit note.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'invoice_credit_property_id', 'property_id');
    }

    /**
     * Get the development associated with this credit note.
     */
    public function development(): BelongsTo
    {
        return $this->belongsTo(Development::class, 'invoice_credit_development_id', 'development_id');
    }

    /**
     * Get the tenancy associated with this credit note.
     */
    public function tenancy(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'invoice_credit_tenancy_id', 'tenancy_id');
    }

    /**
     * Get the branch associated with this credit note.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'invoice_credit_branch', 'branch_id');
    }

    /**
     * Get the employee who created this credit note.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_credit_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this credit note.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_credit_updated_by', 'employee_id');
    }

    /**
     * Get the employee who posted this credit note.
     */
    public function postedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_credit_posted_by', 'employee_id');
    }

    /**
     * Get the credit note lines for this credit note.
     */
    public function lines(): HasMany
    {
        return $this->hasMany(AccountsInvoiceCreditLine::class, 'invoice_credit_id', 'invoice_credit_id');
    }
}