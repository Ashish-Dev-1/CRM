<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoiceStatus extends Model
{
    protected $table = 'accounts_invoice_status';
    protected $primaryKey = 'invoice_status_id';
    public $timestamps = false;

    protected $fillable = [
        'invoice_status_name',
        'invoice_status_description',
    ];

    /**
     * Get the invoices with this status.
     */
    public function invoices(): HasMany
    {
        return $this->hasMany(AccountsInvoice::class, 'invoice_status', 'invoice_status_id');
    }
}