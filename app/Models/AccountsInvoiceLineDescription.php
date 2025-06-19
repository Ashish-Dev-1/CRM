<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoiceLineDescription extends Model
{
    protected $table = 'accounts_invoice_line_description';
    protected $primaryKey = 'invoice_line_description_id';
    public $timestamps = false;

    protected $fillable = [
        'invoice_line_description_name',
        'invoice_line_description_text',
        'invoice_line_description_category',
        'invoice_line_description_default_unit_price',
        'invoice_line_description_default_vat_rate',
        'invoice_line_description_default_nominal_code',
        'invoice_line_description_sort',
        'invoice_line_description_archived',
        'invoice_line_description_branch',
    ];

    /**
     * Get the category for this description.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(
            AccountsInvoiceLineDescriptionCategory::class, 
            'invoice_line_description_category', 
            'invoice_line_description_category_id'
        );
    }

    /**
     * Get the default VAT rate for this description.
     */
    public function defaultVatRate(): BelongsTo
    {
        return $this->belongsTo(AccountsVatRate::class, 'invoice_line_description_default_vat_rate', 'vat_rate_id');
    }

    /**
     * Get the default nominal code for this description.
     */
    public function defaultNominalCode(): BelongsTo
    {
        return $this->belongsTo(AccountsNominalCode::class, 'invoice_line_description_default_nominal_code', 'nominal_code_id');
    }

    /**
     * Get the branch associated with this description.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'invoice_line_description_branch', 'branch_id');
    }

    /**
     * Get the invoice lines that use this description.
     */
    public function invoiceLines(): HasMany
    {
        return $this->hasMany(AccountsInvoiceLine::class, 'invoice_line_description', 'invoice_line_description_id');
    }
}