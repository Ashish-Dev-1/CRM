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
        'invoice_credit_id',
        'invoice_credit_line_description',
        'invoice_credit_line_amount',
        'invoice_credit_line_vat_rate',
        'invoice_credit_line_vat_amount',
        'invoice_credit_line_nominal_code',
    ];

    protected $casts = [
        'invoice_credit_id' => 'integer',
        'invoice_credit_line_amount' => 'decimal:2',
        'invoice_credit_line_vat_rate' => 'integer',
        'invoice_credit_line_vat_amount' => 'decimal:2',
        'invoice_credit_line_nominal_code' => 'integer',
    ];

    protected $dates = [
        'invoice_credit_line_date_created',
        'invoice_credit_line_date_updated',
    ];

    /**
     * Get the credit note that this line belongs to.
     */
    public function invoiceCredit(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoiceCredit::class, 'invoice_credit_id', 'invoice_credit_id');
    }

    /**
     * Get the VAT rate for this line.
     */
    public function vatRate(): BelongsTo
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
    

    /**
     * Get the employee who updated this line.
     */
    
}