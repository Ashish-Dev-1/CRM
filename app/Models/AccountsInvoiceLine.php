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
        'invoice_line_invoice',
        'invoice_line_description',
        'invoice_line_quantity',
        'invoice_line_unit_price',
        'invoice_line_vat_rate',
        'invoice_line_nominal_code',
        'invoice_line_display_order',
        'invoice_line_works',
        'invoice_line_date_created',
        'invoice_line_date_updated',
        'invoice_line_created_by',
        'invoice_line_updated_by',
    ];

    protected $dates = [
        'invoice_line_date_created',
        'invoice_line_date_updated',
    ];

    /**
     * Get the invoice that this line belongs to.
     */
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoice::class, 'invoice_line_invoice', 'invoice_id');
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
        return $this->belongsTo(Works::class, 'invoice_line_works', 'works_id');
    }

    /**
     * Get the employee who created this line.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_line_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated this line.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'invoice_line_updated_by', 'employee_id');
    }
}