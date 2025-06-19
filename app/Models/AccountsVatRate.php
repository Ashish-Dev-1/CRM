<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsVatRate extends Model
{
    protected $table = 'accounts_vat_rate';
    protected $primaryKey = 'vat_rate_id';
    public $timestamps = false;

    protected $fillable = [
        'vat_rate_amount',
        'vat_rate_name',
        'vat_rate_description',
        'vat_rate_multiplier',
        'vat_rate_external_id',
    ];

    /**
     * Get the companies that use this VAT rate as default.
     */
    public function companies(): HasMany
    {
        return $this->hasMany(Company::class, 'company_default_vat_rate', 'vat_rate_id');
    }

    /**
     * Get the nominal codes that use this VAT rate as default.
     */
    public function nominalCodes(): HasMany
    {
        return $this->hasMany(AccountsNominalCode::class, 'nominal_code_default_vat_rate', 'vat_rate_id');
    }

    /**
     * Get the directories that use this VAT rate.
     */
    public function directories(): HasMany
    {
        return $this->hasMany(Directory::class, 'directory_vat_rate', 'vat_rate_id');
    }

    /**
     * Get the invoice lines that use this VAT rate.
     */
    public function invoiceLines(): HasMany
    {
        return $this->hasMany(AccountsInvoiceLine::class, 'invoice_line_vat_rate', 'vat_rate_id');
    }
}