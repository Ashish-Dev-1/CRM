<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vendor extends Model
{
    protected $table = 'vendor';
    protected $primaryKey = 'vendor_id';
    public $timestamps = false;

        protected $fillable = [
        'vendor_id',
        'vendor_token',
        'vendor_type',
        'vendor_title',
        'vendor_first_name',
        'vendor_surname',
        'vendor_trading_name',
        'vendor_company_name',
        'vendor_company_trading_name',
        'vendor_company_contact_name',
        'vendor_company_registration_number',
        'vendor_company_vat_registration_number',
        'vendor_company_reg_office_property_number_name',
        'vendor_company_reg_office_address_line_1',
        'vendor_company_reg_office_address_line_2',
        'vendor_company_reg_office_suburb',
        'vendor_company_reg_office_town_city',
        'vendor_company_reg_office_postcode',
        'vendor_company_reg_office_country',
        'vendor_phone_home',
        'vendor_phone_work',
        'vendor_phone_mobile',
        'vendor_fax',
        'vendor_email',
        'vendor_property_number_name',
        'vendor_apartment_number_name',
        'vendor_address_line_1',
        'vendor_address_line_2',
        'vendor_suburb',
        'vendor_town_city',
        'vendor_postcode',
        'vendor_country',
        'vendor_bank_name',
        'vendor_bank_sort_code',
        'vendor_bank_account_number',
        'vendor_bank_account_name',
        'vendor_status',
        'vendor_lead_source',
        'vendor_notes',
        'vendor_online_account',
        'vendor_online_login_username',
        'vendor_online_login_password',
        'vendor_online_account_password_reset_token',
        'vendor_dob',
        'vendor_passport_number',
        'vendor_driving_licence_number',
        'vendor_nino',
        'vendor_sole_sale_fee',
        'vendor_sole_sale_fee_type',
        'vendor_multi_sale_fee',
        'vendor_multi_sale_fee_type',
        'vendor_date_created',
        'vendor_date_updated',
        'vendor_created_by',
        'vendor_updated_by',
        'vendor_solicitor_company',
        'vendor_solicitor_company_individual',
        'vendor_branch',
        'vendor_mailing_list',
        'vendor_fees_notes',
        'vendor_capacity',
        'vendor_deceased',
        'vendor_emails_new_viewing',
        'vendor_emails_edit_viewing',
        'vendor_emails_feedback',
        'vendor_emails_property_performance_review',
        'vendor_emails_new_offer',
        'vendor_emails_edit_offer',
    ];

    protected $casts = [
        'vendor_type' => 'integer',
        'vendor_title' => 'integer',
        'vendor_bank_name' => 'integer',
        'vendor_online_account' => 'integer',
        'vendor_dob' => 'date',
        'vendor_sole_sale_fee' => 'decimal:2',
        'vendor_sole_sale_fee_type' => 'integer',
        'vendor_multi_sale_fee' => 'decimal:2',
        'vendor_multi_sale_fee_type' => 'integer',
        'vendor_date_created' => 'datetime',
        'vendor_date_updated' => 'datetime',
        'vendor_mailing_list' => 'integer',
        'vendor_capacity' => 'integer',
        'vendor_deceased' => 'integer',
        'vendor_emails_new_viewing' => 'integer',
        'vendor_emails_edit_viewing' => 'integer',
        'vendor_emails_feedback' => 'integer',
        'vendor_emails_property_performance_review' => 'integer',
        'vendor_emails_new_offer' => 'integer',
        'vendor_emails_edit_offer' => 'integer',
    ];

        protected $dates = [
        'vendor_dob',
        'vendor_date_created',
        'vendor_date_updated',
    ];

    /**
     * Get the branch that the vendor belongs to.
     */
    

    /**
     * Get the title of the vendor.
     */
    

    /**
     * Get the country of the vendor.
     */
    

    /**
     * Get the registered office country of the vendor.
     */
    

    /**
     * Get the bank of the vendor.
     */
    

    /**
     * Get the type of the vendor.
     */
    

    /**
     * Get the status of the vendor.
     */
    

    /**
     * Get the sole sale fee type.
     */
    

    /**
     * Get the multi sale fee type.
     */
    

    /**
     * Get the solicitor company of the vendor.
     */
    

    /**
     * Get the solicitor individual of the vendor.
     */
    

    /**
     * Get the capacity of the vendor.
     */
    

    /**
     * Get the employee who created the vendor.
     */
    

    /**
     * Get the employee who updated the vendor.
     */
    

    /**
     * Get the properties for the vendor.
     */
    

    /**
     * Get the Bank associated with this record.
     */
    public function name(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'vendor_bank_name', 'bank_id');
    }

    /**
     * Get the Branch associated with this record.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'vendor_branch', 'branch_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'vendor_company_reg_office_country', 'country_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'vendor_country', 'country_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'vendor_created_by', 'employee_id');
    }

    /**
     * Get the Title associated with this record.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'vendor_title', 'title_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'vendor_updated_by', 'employee_id');
    }

    /**
     * Get the BodyType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(BodyType::class, 'vendor_type', 'body_type_id');
    }

    /**
     * Get the VendorStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(VendorStatus::class, 'vendor_status', 'vendor_status_id');
    }

    /**
     * Get the FeeType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(FeeType::class, 'vendor_sole_sale_fee_type', 'fee_type_id');
    }

    /**
     * Get the FeeType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(FeeType::class, 'vendor_multi_sale_fee_type', 'fee_type_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'vendor_solicitor_company', 'directory_id');
    }

    /**
     * Get the DirectoryIndividual associated with this record.
     */
    public function individual(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'vendor_solicitor_company_individual', 'directory_individual_id');
    }

    /**
     * Get the Capacity associated with this record.
     */
    public function capacity(): BelongsTo
    {
        return $this->belongsTo(Capacity::class, 'vendor_capacity', 'capacity_id');
    }
}