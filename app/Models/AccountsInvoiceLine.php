<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccountsInvoiceLine extends Model
{
    protected $table = 'accounts_invoice_line';
    protected $primaryKey = 'invoice_line_id';
    public $timestamps = false;

    protected $fillable = [
        'invoice_id',
        'invoice_line_description',
        'invoice_line_amount',
        'invoice_line_vat_rate',
        'invoice_line_vat_amount',
        'invoice_line_nominal_code',
        'invoice_line_works_id',
    ];

    protected $casts = [
        'invoice_id' => 'integer',
        'invoice_line_amount' => 'decimal:2',
        'invoice_line_vat_rate' => 'integer',
        'invoice_line_vat_amount' => 'decimal:2',
        'invoice_line_nominal_code' => 'integer',
        'invoice_line_works_id' => 'integer',
    ];

    /**
     * Get the invoice that this line belongs to.
     */
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoice::class, 'invoice_id', 'invoice_id');
    }

    /**
     * Get the description template for this line.
     */
    public function description(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoiceLineDescription::class, 'invoice_line_description', 'invoice_line_description_id');
    }

    /**
     * Get the VAT rate for this line.
     */
    public function vatRate(): BelongsTo
    {
        return $this->belongsTo(AccountsVatRate::class, 'invoice_line_vat_rate', 'vat_rate_id');
    }

    /**
     * Get the nominal code for this line.
     */
    public function nominalCode(): BelongsTo
    {
        return $this->belongsTo(AccountsNominalCode::class, 'invoice_line_nominal_code', 'nominal_code_id');
    }

    /**
     * Get the works (maintenance) record associated with this line, if any.
     */
    public function works(): BelongsTo
    {
        return $this->belongsTo(Works::class, 'invoice_line_works_id', 'works_id');
    }

    /**
     * Get the employee who created this line.
     */
    

    /**
     * Get the employee who updated this line.
     */
    
}