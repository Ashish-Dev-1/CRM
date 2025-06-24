<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Directory extends Model
{
    protected $table = 'directory';
    
    public $timestamps = false;

        protected $fillable = [
        'directory_category',
        'directory_company_name',
        'directory_branch_name',
        'directory_contact_name',
        'directory_phone_work',
        'directory_phone_mobile',
        'directory_fax',
        'directory_email',
        'directory_website',
        'directory_dx',
        'directory_property_number_name',
        'directory_apartment_number_name',
        'directory_address_line_1',
        'directory_address_line_2',
        'directory_suburb',
        'directory_town_city',
        'directory_postcode',
        'directory_country',
        'directory_bank_name',
        'directory_bank_sort_code',
        'directory_bank_account_number',
        'directory_bank_account_name',
        'directory_status',
        'directory_notes',
        'directory_date_created',
        'directory_date_updated',
        'directory_created_by',
        'directory_updated_by',
        'directory_commission_scheme',
        'directory_commission_percentage',
        'directory_payment_terms',
        'directory_landlord_contractor',
        'directory_nominal_code',
        'directory_vat_rate',
        'directory_accounts_purposes_only',
    ];

    protected $casts = [
        'directory_category' => 'integer',
        'directory_country' => 'integer',
        'directory_bank_name' => 'integer',
        'directory_status' => 'integer',
        'directory_date_created' => 'datetime',
        'directory_date_updated' => 'datetime',
        'directory_created_by' => 'integer',
        'directory_updated_by' => 'integer',
        'directory_commission_scheme' => 'integer',
        'directory_commission_percentage' => 'decimal:2',
        'directory_payment_terms' => 'integer',
        'directory_landlord_contractor' => 'integer',
        'directory_nominal_code' => 'integer',
        'directory_vat_rate' => 'integer',
        'directory_accounts_purposes_only' => 'integer',
    ];

        protected $dates = [
        'directory_date_created',
        'directory_date_updated',
    ];

    /**
     * Get the category of the directory.
     */

    /**
     * Get the country of the directory.
     */

    /**
     * Get the bank of the directory.
     */

    /**
     * Get the status of the directory.
     */

    /**
     * Get the payment terms of the directory.
     */

    /**
     * Get the landlord contractor of the directory.
     */

    /**
     * Get the commission scheme of the directory.
     */

    /**
     * Get the nominal code of the directory.
     */

    /**
     * Get the VAT rate of the directory.
     */

    /**
     * Get the employee who created the directory.
     */

    /**
     * Get the employee who updated the directory.
     */

    /**
     * Get the individuals for the directory.
     */

    /**
     * Get the trades for the directory.
     */

    /**
     * Get the Bank associated with this record.
     */
    public function name(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'directory_bank_name', 'bank_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'directory_country', 'country_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'directory_created_by', 'employee_id');
    }

    /**
     * Get the AccountsNominalCode associated with this record.
     */
    public function code(): BelongsTo
    {
        return $this->belongsTo(AccountsNominalCode::class, 'directory_nominal_code', 'nominal_code_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'directory_updated_by', 'employee_id');
    }

    /**
     * Get the AccountsVatRate associated with this record.
     */
    public function rate(): BelongsTo
    {
        return $this->belongsTo(AccountsVatRate::class, 'directory_vat_rate', 'vat_rate_id');
    }

    /**
     * Get the DirectoryCategory associated with this record.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(DirectoryCategory::class, 'directory_category', 'directory_category_id');
    }

    /**
     * Get the AccountsPaymentTerm associated with this record.
     */
    public function terms(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentTerm::class, 'directory_payment_terms', 'accounts_payment_term_id');
    }

    /**
     * Get the Landlord associated with this record.
     */
    public function contractor(): BelongsTo
    {
        return $this->belongsTo(Landlord::class, 'directory_landlord_contractor', 'landlord_id');
    }

    /**
     * Get the DirectoryCommissionScheme associated with this record.
     */
    public function scheme(): BelongsTo
    {
        return $this->belongsTo(DirectoryCommissionScheme::class, 'directory_commission_scheme', 'directory_commission_scheme_id');
    }

    /**
     * Get the DirectoryStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(DirectoryStatus::class, 'directory_status', 'directory_status_id');
    }
}