<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsNominalCode extends Model
{
    protected $table = 'accounts_nominal_code';
    protected $primaryKey = 'nominal_code_id';
    public $timestamps = false;

    protected $fillable = [
        'nominal_code_name',
        'nominal_code_type',
        'nominal_code_external_id',
        'nominal_code_default_vat_rate',
        'nominal_code_archive',
    ];

    protected $casts = [
        'nominal_code_type' => 'integer',
        'nominal_code_external_id' => 'integer',
        'nominal_code_default_vat_rate' => 'integer',
        'nominal_code_archive' => 'integer',
    ];

    /**
     * Get the type of this nominal code.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(AccountsNominalCodeType::class, 'nominal_code_type', 'nominal_code_type_id');
    }

    /**
     * Get the default VAT rate for this nominal code.
     */
    public function defaultVatRate(): BelongsTo
    {
        return $this->belongsTo(AccountsVatRate::class, 'nominal_code_default_vat_rate', 'vat_rate_id');
    }

    /**
     * Get the invoice lines that use this nominal code.
     */
    public function invoiceLines(): HasMany
    {
        return $this->hasMany(AccountsInvoiceLine::class, 'invoice_line_nominal_code', 'nominal_code_id');
    }

    /**
     * Get the invoice credit lines that use this nominal code.
     */
    public function invoiceCreditLines(): HasMany
    {
        return $this->hasMany(AccountsInvoiceCreditLine::class, 'invoice_credit_line_nominal_code', 'nominal_code_id');
    }

    /**
     * Get the invoice line descriptions that use this nominal code as default.
     */
    public function invoiceLineDescriptions(): HasMany
    {
        return $this->hasMany(AccountsInvoiceLineDescription::class, 'invoice_line_nominal_code', 'nominal_code_id');
    }

    /**
     * Get the directory entries that use this nominal code.
     */
    public function directories(): HasMany
    {
        return $this->hasMany(Directory::class, 'directory_nominal_code', 'nominal_code_id');
    }
}