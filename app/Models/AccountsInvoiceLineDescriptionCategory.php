<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoiceLineDescriptionCategory extends Model
{
    protected $table = 'accounts_invoice_line_description_category';
    
    public $timestamps = false;

        protected $fillable = [
        'invoice_line_description_category_name',
        'invoice_line_description_category_sort',
    ];

    protected $casts = [
        'invoice_line_description_category_sort' => 'integer',
    ];

    /**
     * Get the invoice line descriptions in this category.
     */
    
}