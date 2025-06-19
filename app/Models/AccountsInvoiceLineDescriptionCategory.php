<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoiceLineDescriptionCategory extends Model
{
    protected $table = 'accounts_invoice_line_description_category';
    protected $primaryKey = 'invoice_line_description_category_id';
    public $timestamps = false;

    protected $fillable = [
        'invoice_line_description_category_name',
        'invoice_line_description_category_description',
        'invoice_line_description_category_sort',
    ];

    /**
     * Get the invoice line descriptions in this category.
     */
    public function descriptions(): HasMany
    {
        return $this->hasMany(
            AccountsInvoiceLineDescription::class, 
            'invoice_line_description_category', 
            'invoice_line_description_category_id'
        );
    }
}