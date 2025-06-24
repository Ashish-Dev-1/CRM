<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoiceStatus extends Model
{
    protected $table = 'accounts_invoice_statuses';
    public $timestamps = false;

        protected $fillable = [
        'invoice_status_name',
    ];

    /**
     * Get the invoices with this status.
     */
    
}