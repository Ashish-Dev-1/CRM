<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoiceLineDescription extends Model
{
    protected $table = 'accounts_invoice_line_description';
    protected $primaryKey = 'tinyInteger';
    public $timestamps = false;

        protected $fillable = [
        'invoice_line_description_name',
        'invoice_line_description_sort',
        'invoice_line_nominal_code',
        'invoice_line_description_category',
        'invoice_line_description_amount',
    ];

    protected $casts = [
        'invoice_line_description_sort' => 'integer',
        'invoice_line_nominal_code' => 'integer',
        'invoice_line_description_category' => 'integer',
        'invoice_line_description_amount' => 'decimal:2',
    ];

    /**
     * Get the category for this description.
     */
    

    /**
     * Get the default VAT rate for this description.
     */
    

    /**
     * Get the default nominal code for this description.
     */
    

    /**
     * Get the branch associated with this description.
     */
    

    /**
     * Get the invoice lines that use this description.
     */
    

    /**
     * Get the AccountsInvoiceLineDescriptionCategory associated with this record.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoiceLineDescriptionCategory::class, 'invoice_line_description_category', 'invoice_line_description_category_id');
    }

    /**
     * Get the AccountsNominalCode associated with this record.
     */
    public function code(): BelongsTo
    {
        return $this->belongsTo(AccountsNominalCode::class, 'invoice_line_nominal_code', 'nominal_code_id');
    }
}