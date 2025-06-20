<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tenant extends Model
{
    protected $table = 'tenant';
    protected $primaryKey = 'tenant_id';
    public $timestamps = false;

        protected $fillable = [
        'tenant_id',
        'tenant_token',
        'tenant_type',
        'tenant_title',
        'tenant_first_name',
        'tenant_surname',
        'tenant_company_name',
        'tenant_company_trading_name',
        'tenant_company_contact_name',
        'tenant_company_registration_number',
        'tenant_company_vat_registration_number',
        'tenant_phone_home',
        'tenant_phone_work',
        'tenant_phone_mobile',
        'tenant_fax',
        'tenant_email',
        'tenant_email_accounts',
        'tenant_email_works',
        'tenant_property_number_name',
        'tenant_apartment_number_name',
        'tenant_address_line_1',
        'tenant_address_line_2',
        'tenant_suburb',
        'tenant_town_city',
        'tenant_postcode',
        'tenant_country',
        'tenant_forwarding_property_number_name',
        'tenant_forwarding_apartment_number_name',
        'tenant_forwarding_address_line_1',
        'tenant_forwarding_address_line_2',
        'tenant_forwarding_suburb',
        'tenant_forwarding_town_city',
        'tenant_forwarding_postcode',
        'tenant_forwarding_country',
        'tenant_dob',
        'tenant_passport_number',
        'tenant_notes',
        'tenant_bank_name',
        'tenant_bank_sort_code',
        'tenant_bank_account_number',
        'tenant_bank_account_name',
        'tenant_date_created',
        'tenant_date_updated',
        'tenant_created_by',
        'tenant_updated_by',
        'tenant_online_account',
        'tenant_online_login_username',
        'tenant_online_login_password',
        'tenant_online_account_password_reset_token',
        'tenant_nino',
        'tenant_employment_status',
        'tenant_employer_name',
        'tenant_income',
        'tenant_income_frequency',
        'tenant_driving_licence_number',
        'tenant_employment_income_notes',
        'tenant_referencing_provider',
        'tenant_referencing_provider_reference',
        'tenant_branch',
        'tenant_right_to_rent_review_date',
    ];

    protected $casts = [
        'tenant_type' => 'integer',
        'tenant_title' => 'integer',
        'tenant_country' => 'integer',
        'tenant_forwarding_country' => 'integer',
        'tenant_dob' => 'date',
        'tenant_bank_name' => 'integer',
        'tenant_date_created' => 'datetime',
        'tenant_date_updated' => 'datetime',
        'tenant_created_by' => 'integer',
        'tenant_updated_by' => 'integer',
        'tenant_online_account' => 'integer',
        'tenant_employment_status' => 'integer',
        'tenant_income' => 'decimal:2',
        'tenant_income_frequency' => 'integer',
        'tenant_referencing_provider' => 'integer',
        'tenant_branch' => 'integer',
        'tenant_right_to_rent_review_date' => 'date',
    ];

        protected $dates = [
        'tenant_dob',
        'tenant_date_created',
        'tenant_date_updated',
        'tenant_right_to_rent_review_date',
    ];

    /**
     * Get the title of the tenant.
     */
    

    /**
     * Get the forwarding country of the tenant.
     */
    

    /**
     * Get the employee who created the tenant.
     */
    

    /**
     * Get the employee who updated the tenant.
     */
    

    /**
     * Get the tenancy relationships for the tenant.
     */
    

    /**
     * Get the income records for the tenant.
     */
    

    /**
     * Get the Bank associated with this record.
     */
    public function name(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'tenant_bank_name', 'bank_id');
    }

    /**
     * Get the Branch associated with this record.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'tenant_branch', 'branch_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_created_by', 'employee_id');
    }

    /**
     * Get the Title associated with this record.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'tenant_title', 'title_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenant_updated_by', 'employee_id');
    }

    /**
     * Get the BodyType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(BodyType::class, 'tenant_type', 'body_type_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'tenant_country', 'country_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'tenant_forwarding_country', 'country_id');
    }

    /**
     * Get the EmploymentStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(EmploymentStatus::class, 'tenant_employment_status', 'employment_status_id');
    }

    /**
     * Get the IncomeFrequency associated with this record.
     */
    public function frequency(): BelongsTo
    {
        return $this->belongsTo(IncomeFrequency::class, 'tenant_income_frequency', 'income_frequency_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function provider(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'tenant_referencing_provider', 'directory_id');
    }
}