<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountsBacsFile extends Model
{
    protected $table = 'accounts_bacs_file';
    protected $primaryKey = 'bacs_file_id';
    public $timestamps = false;

        protected $fillable = [
        'bacs_file_destination_sort_code',
        'bacs_file_destination_account_number',
        'bacs_file_destination_account_type',
        'bacs_file_bacs_code',
        'bacs_file_debit_sort_code',
        'bacs_file_debit_account_number',
        'bacs_file_free_format_text',
        'bacs_file_amount_pence',
        'bacs_file_amount',
        'bacs_file_originator_name',
        'bacs_file_reference',
        'bacs_file_invoice_payment_reference',
        'bacs_file_landlord_payment_reference',
        'bacs_file_destination_account_name',
        'bacs_file_processing_date',
        'bacs_file_directory_id',
        'bacs_file_payment_date',
        'bacs_file_disbursement_DEL',
        'bacs_file_nominal_code',
        'bacs_file_vat_rate',
        'bacs_file_vat_amount',
        'bacs_file_exported',
        'bacs_file_date_created',
        'bacs_file_created_by',
    ];

        protected $dates = [
        'bacs_file_payment_date',
        'bacs_file_date_created',
    ];

        protected $casts = [
        'bacs_file_amount' => 'decimal:2',
        'bacs_file_invoice_payment_reference' => 'integer',
        'bacs_file_landlord_payment_reference' => 'integer',
        'bacs_file_directory_id' => 'integer',
        'bacs_file_payment_date' => 'date',
        'bacs_file_disbursement_DEL' => 'integer',
        'bacs_file_nominal_code' => 'integer',
        'bacs_file_vat_rate' => 'integer',
        'bacs_file_vat_amount' => 'decimal:2',
        'bacs_file_exported' => 'boolean',
        'bacs_file_date_created' => 'datetime',
        'bacs_file_created_by' => 'integer',
    ];

    /**
     * Get the directory associated with this BACS file.
     */
    public function directory(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'bacs_file_directory_id', 'directory_id');
    }

    /**
     * Get the employee who created this BACS file.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'bacs_file_created_by', 'employee_id');
    }

    /**
     * Get the invoice payment reference associated with this BACS file.
     */
    public function invoicePayment(): BelongsTo
    {
        return $this->belongsTo(AccountsInvoice::class, 'bacs_file_invoice_payment_reference', 'invoice_id');
    }

    /**
     * Get the landlord payment reference associated with this BACS file.
     */
    public function landlordPayment(): BelongsTo
    {
        return $this->belongsTo(AccountsLandlordPayment::class, 'bacs_file_landlord_payment_reference', 'landlord_payment_id');
    }

    /**
     * Get the nominal code associated with this BACS file.
     */
    public function nominalCode(): BelongsTo
    {
        return $this->belongsTo(AccountsNominalCode::class, 'bacs_file_nominal_code', 'nominal_code_id');
    }

    /**
     * Get the VAT rate associated with this BACS file.
     */
    public function vatRate(): BelongsTo
    {
        return $this->belongsTo(AccountsVatRate::class, 'bacs_file_vat_rate', 'vat_rate_id');
    }
}