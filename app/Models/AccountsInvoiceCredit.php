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
        'invoice_credit_invoice',
        'invoice_credit_number',
        'invoice_credit_date',
        'invoice_credit_reason',
        'invoice_credit_notes',
        'invoice_credit_date_created',
        'invoice_credit_date_updated',
        'invoice_credit_created_by',
        'invoice_credit_updated_by',
    ];

    protected $dates = [
        'invoice_credit_date',
        'invoice_credit_date_created',
        'invoice_credit_date_updated',
    ];

    /**
     * Get the invoice that this credit note is for.
     */
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoice::class, 'invoice_credit_invoice', 'invoice_id');
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
     * Get the credit note lines for this credit note.
     */
    public function lines(): HasMany
    {
        return $this->hasMany(AccountsInvoiceCreditLine::class, 'invoice_credit_line_credit', 'invoice_credit_id');
    }
}