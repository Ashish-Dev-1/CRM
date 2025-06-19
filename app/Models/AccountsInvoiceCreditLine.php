<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccountsInvoiceCreditLine extends Model
{
    protected $table = 'accounts_invoice_credit_line';
    protected $primaryKey = 'invoice_credit_line_id';
    public $timestamps = false;

    protected $fillable = [
        'invoice_credit_line_credit',
        'invoice_credit_line_description',
        'invoice_credit_line_quantity',
        'invoice_credit_line_unit_price',
        'invoice_credit_line_vat_rate',
        'invoice_credit_line_nominal_code',
        'invoice_credit_line_display_order',
        'invoice_credit_line_date_created',
        'invoice_credit_line_date_updated',
        'invoice_credit_line_created_by',
        'invoice_credit_line_updated_by',
    ];

    protected $dates = [
        'invoice_credit_line_date_created',
        'invoice_credit_line_date_updated',
    ];

    /**
     * Get the credit note that this line belongs to.
     */
    public function creditNote(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoiceCredit::class, 'invoice_credit_line_credit', 'invoice_credit_id');
    }

    /**
     * Get the VAT rate for this line.
     */
    public function AccountsVatRate(): BelongsTo
    {
        return $this->belongsTo(AccountsVatRate::class, 'invoice_credit_line_vat_rate', 'vat_rate_id');
    }

    /**
     * Get the nominal code for this line.
     */
    public function nominalCode(): BelongsTo
    {
        return $this->belongsTo(AccountsNominalCode::class, 'invoice_credit_line_nominal_code', 'nominal_code_id');
    }

    /**
     * Get the employee who created this line.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_credit_line_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this line.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_credit_line_updated_by', 'employee_id');
    }
}