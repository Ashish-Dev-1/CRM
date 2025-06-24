<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Landlord extends Model
{
    protected $table = 'landlord';
    protected $primaryKey = 'landlord_id';
    public $timestamps = false;

        protected $fillable = [
        'landlord_id',
        'landlord_token',
        'landlord_type',
        'landlord_title',
        'landlord_first_name',
        'landlord_surname',
        'landlord_trading_name',
        'landlord_company_name',
        'landlord_company_trading_name',
        'landlord_company_contact_name',
        'landlord_company_registration_number',
        'landlord_company_vat_registration_number',
        'landlord_company_reg_office_property_number_name',
        'landlord_company_reg_office_address_line_1',
        'landlord_company_reg_office_address_line_2',
        'landlord_company_reg_office_suburb',
        'landlord_company_reg_office_town_city',
        'landlord_company_reg_office_postcode',
        'landlord_company_reg_office_country',
        'landlord_phone_home',
        'landlord_phone_work',
        'landlord_phone_mobile',
        'landlord_fax',
        'landlord_email',
        'landlord_email_accounts',
        'landlord_email_works',
        'landlord_property_number_name',
        'landlord_apartment_number_name',
        'landlord_address_line_1',
        'landlord_address_line_2',
        'landlord_suburb',
        'landlord_town_city',
        'landlord_postcode',
        'landlord_country',
        'landlord_bank_name',
        'landlord_bank_sort_code',
        'landlord_bank_account_number',
        'landlord_bank_account_name',
        'landlord_bank_iban',
        'landlord_bank_bic_swift',
        'landlord_nrl_status',
        'landlord_nrl_tax_rate',
        'landlord_nrl_reference',
        'landlord_nrl_date',
        'landlord_status',
        'landlord_lead_source',
        'landlord_notes',
        'landlord_online_account',
        'landlord_online_login_username',
        'landlord_online_login_password',
        'landlord_online_account_password_reset_token',
        'landlord_lha',
        'landlord_pets',
        'landlord_smoking',
        'landlord_sharers',
        'landlord_contractors_use',
        'landlord_tenant_find_fee',
        'landlord_tenant_find_fee_type',
        'landlord_tenant_find_with_management_fee',
        'landlord_tenant_find_with_management_fee_type',
        'landlord_management_fee',
        'landlord_management_fee_type',
        'landlord_dob',
        'landlord_passport_number',
        'landlord_driving_licence_number',
        'landlord_nino',
        'landlord_branch',
        'landlord_solicitor_company',
        'landlord_mailing_list',
        'landlord_solicitor_company_individual',
        'landlord_works_notes',
        'landlord_fees_notes',
        'landlord_emails_new_invoice_credit',
        'landlord_emails_new_property_inspection',
        'landlord_emails_new_invoice',
        'landlord_emails_new_landlord_payment',
        'landlord_emails_edit_works',
        'landlord_emails_tenant_charge_chase',
        'landlord_emails_new_application',
        'landlord_emails_edit_application',
        'landlord_emails_new_viewing',
        'landlord_emails_edit_viewing',
        'landlord_emails_new_certificate_renewal',
        'landlord_emails_certificate_take_on_chase',
        'landlord_emails_selective_licence_chase',
        'landlord_emails_outstanding_invoice_balance_exceed_income',
        'landlord_bacs_file',
        'landlord_suspend_payments',
        'landlord_capacity',
        'landlord_deceased',
        'landlord_discount_group',
        'landlord_date_created',
        'landlord_date_updated',
        'landlord_created_by',
        'landlord_updated_by',
    ];

    protected $casts = [
        'landlord_type' => 'integer',
        'landlord_title' => 'integer',
        'landlord_company_reg_office_country' => 'integer',
        'landlord_country' => 'integer',
        'landlord_bank_name' => 'integer',
        'landlord_nrl_status' => 'integer',
        'landlord_nrl_tax_rate' => 'decimal:2',
        'landlord_nrl_date' => 'date',
        'landlord_status' => 'integer',
        'landlord_lead_source' => 'integer',
        'landlord_online_account' => 'integer',
        'landlord_lha' => 'integer',
        'landlord_pets' => 'integer',
        'landlord_smoking' => 'integer',
        'landlord_sharers' => 'integer',
        'landlord_contractors_use' => 'integer',
        'landlord_tenant_find_fee' => 'decimal:2',
        'landlord_tenant_find_fee_type' => 'integer',
        'landlord_tenant_find_with_management_fee' => 'decimal:2',
        'landlord_tenant_find_with_management_fee_type' => 'integer',
        'landlord_management_fee' => 'decimal:2',
        'landlord_management_fee_type' => 'integer',
        'landlord_dob' => 'date',
        'landlord_branch' => 'integer',
        'landlord_solicitor_company' => 'integer',
        'landlord_mailing_list' => 'integer',
        'landlord_solicitor_company_individual' => 'integer',
        'landlord_emails_new_invoice_credit' => 'integer',
        'landlord_emails_new_property_inspection' => 'integer',
        'landlord_emails_new_invoice' => 'integer',
        'landlord_emails_new_landlord_payment' => 'integer',
        'landlord_emails_edit_works' => 'integer',
        'landlord_emails_tenant_charge_chase' => 'integer',
        'landlord_emails_new_application' => 'integer',
        'landlord_emails_edit_application' => 'integer',
        'landlord_emails_new_viewing' => 'integer',
        'landlord_emails_edit_viewing' => 'integer',
        'landlord_emails_new_certificate_renewal' => 'integer',
        'landlord_emails_certificate_take_on_chase' => 'integer',
        'landlord_emails_selective_licence_chase' => 'integer',
        'landlord_emails_outstanding_invoice_balance_exceed_income' => 'boolean',
        'landlord_bacs_file' => 'integer',
        'landlord_suspend_payments' => 'boolean',
        'landlord_capacity' => 'integer',
        'landlord_deceased' => 'integer',
        'landlord_discount_group' => 'integer',
        'landlord_date_created' => 'datetime',
        'landlord_date_updated' => 'datetime',
        'landlord_created_by' => 'integer',
        'landlord_updated_by' => 'integer',
    ];

        protected $dates = [
        'landlord_nrl_date',
        'landlord_dob',
        'landlord_date_created',
        'landlord_date_updated',
    ];

    /**
     * Get the branch that the landlord belongs to.
     */
    

    /**
     * Get the title of the landlord.
     */
    

    /**
     * Get the country of the landlord.
     */
    

    /**
     * Get the registered office country of the landlord.
     */
    

    /**
     * Get the bank of the landlord.
     */
    

    /**
     * Get the type of the landlord.
     */
    

    /**
     * Get the NRL status of the landlord.
     */
    

    /**
     * Get the status of the landlord.
     */
    

    /**
     * Get the capacity of the landlord.
     */
    

    /**
     * Get the discount group of the landlord.
     */
    

    /**
     * Get the employee who created the landlord.
     */
    

    /**
     * Get the employee who updated the landlord.
     */
    

    /**
     * Get the properties for the landlord.
     */
    

    /**
     * Get the Bank associated with this record.
     */
    public function name(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'landlord_bank_name', 'bank_id');
    }

    /**
     * Get the Branch associated with this record.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'landlord_branch', 'branch_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'landlord_company_reg_office_country', 'country_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function landlordCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'landlord_country', 'country_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'landlord_created_by', 'employee_id');
    }

    /**
     * Get the Title associated with this record.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'landlord_title', 'title_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'landlord_updated_by', 'employee_id');
    }

    /**
     * Get the BodyType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(BodyType::class, 'landlord_type', 'body_type_id');
    }

    /**
     * Get the LandlordNrlStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(LandlordNrlStatus::class, 'landlord_nrl_status', 'landlord_nrl_status_id');
    }

    /**
     * Get the LandlordStatus associated with this record.
     */
    public function landlordStatus(): BelongsTo
    {
        return $this->belongsTo(LandlordStatus::class, 'landlord_status', 'landlord_status_id');
    }

    /**
     * Get the Capacity associated with this record.
     */
    public function capacity(): BelongsTo
    {
        return $this->belongsTo(Capacity::class, 'landlord_capacity', 'capacity_id');
    }

    /**
     * Get the DiscountGroup associated with this record.
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(DiscountGroup::class, 'landlord_discount_group', 'discount_group_id');
    }
}