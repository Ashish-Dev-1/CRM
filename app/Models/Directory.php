<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Directory extends Model
{
    protected $table = 'directory';
    protected $primaryKey = 'directory_id';
    public $timestamps = false;

    protected $fillable = [
        'directory_category',
        'directory_company_name',
        'directory_branch_name',
        'directory_contact_name',
        // ...other fields...
    ];

    protected $dates = [
        'directory_date_created',
        'directory_date_updated',
    ];

    /**
     * Get the category of the directory.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(DirectoryCategory::class, 'directory_category', 'directory_category_id');
    }

    /**
     * Get the country of the directory.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'directory_country', 'country_id');
    }

    /**
     * Get the bank of the directory.
     */
    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'directory_bank_name', 'bank_id');
    }

    /**
     * Get the status of the directory.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(DirectoryStatus::class, 'directory_status', 'directory_status_id');
    }

    /**
     * Get the payment terms of the directory.
     */
    public function paymentTerms(): BelongsTo
    {
        return $this->belongsTo(AccountsPaymentTerm::class, 'directory_payment_terms', 'accounts_payment_term_id');
    }

    /**
     * Get the landlord contractor of the directory.
     */
    public function landlordContractor(): BelongsTo
    {
        return $this->belongsTo(Landlord::class, 'directory_landlord_contractor', 'landlord_id');
    }

    /**
     * Get the commission scheme of the directory.
     */
    public function commissionScheme(): BelongsTo
    {
        return $this->belongsTo(DirectoryCommissionScheme::class, 'directory_commission_scheme', 'directory_commission_scheme_id');
    }

    /**
     * Get the nominal code of the directory.
     */
    public function nominalCode(): BelongsTo
    {
        return $this->belongsTo(AccountsNominalCode::class, 'directory_nominal_code', 'nominal_code_id');
    }

    /**
     * Get the VAT rate of the directory.
     */
    public function vatRate(): BelongsTo
    {
        return $this->belongsTo(AccountsVatRate::class, 'directory_vat_rate', 'vat_rate_id');
    }

    /**
     * Get the employee who created the directory.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'directory_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the directory.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'directory_updated_by', 'employee_id');
    }

    /**
     * Get the individuals for the directory.
     */
    public function individuals(): HasMany
    {
        return $this->hasMany(DirectoryIndividual::class, 'directory_individual_company', 'directory_id');
    }

    /**
     * Get the trades for the directory.
     */
    public function trades(): BelongsToMany
    {
        return $this->belongsToMany(
            DirectoryTrades::class,
            'directory_to_trades',
            'directory_id',
            'directory_trades_id'
        );
    }
}