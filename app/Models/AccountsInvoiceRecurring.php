<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsInvoiceRecurring extends Model
{
    protected $table = 'accounts_invoice_recurring';
    public $timestamps = false;

        protected $fillable = [
        'invoice_recurring_invoice_id',
        'invoice_recurring_frequency',
        'invoice_recurring_frequency_unit',
        'invoice_recurring_start_date',
        'invoice_recurring_next_processing_date',
        'invoice_recurring_suspended',
    ];

    protected $casts = [
        'invoice_recurring_invoice_id' => 'integer',
        'invoice_recurring_frequency' => 'integer',
        'invoice_recurring_frequency_unit' => 'integer',
        'invoice_recurring_start_date' => 'date',
        'invoice_recurring_next_processing_date' => 'date',
        'invoice_recurring_suspended' => 'integer',
    ];

        protected $dates = [
        'invoice_recurring_start_date',
        'invoice_recurring_next_processing_date',
    ];

    /**
     * Get the property associated with this recurring invoice.
     */
    

    /**
     * Get the tenancy associated with this recurring invoice.
     */
    

    /**
     * Get the nominal code for this recurring invoice.
     */
    

    /**
     * Get the frequency unit for this recurring invoice.
     */
    

    /**
     * Get the branch associated with this recurring invoice.
     */
    

    /**
     * Get the employee who created this recurring invoice.
     */
    

    /**
     * Get the employee who updated this recurring invoice.
     */
    

    /**
     * Get the invoices generated from this recurring invoice.
     */
    

    /**
     * Get the AccountsRecurringFrequencyUnit associated with this record.
     */
    public function unit(): BelongsTo
    {
        return $this->belongsTo(AccountsRecurringFrequencyUnit::class, 'invoice_recurring_frequency_unit', 'recurring_frequency_unit_id');
    }

    /**
     * Get the AccountsInvoice associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoice::class, 'invoice_recurring_invoice_id', 'invoice_id');
    }
}