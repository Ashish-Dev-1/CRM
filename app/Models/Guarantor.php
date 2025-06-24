<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guarantor extends Model
{
    protected $table = 'guarantor';
    
    public $timestamps = false;

        protected $fillable = [
        'guarantor_title',
        'guarantor_first_name',
        'guarantor_surname',
        'guarantor_phone_home',
        'guarantor_phone_work',
        'guarantor_phone_mobile',
        'guarantor_fax',
        'guarantor_email',
        'guarantor_property_number_name',
        'guarantor_apartment_number_name',
        'guarantor_address_line_1',
        'guarantor_address_line_2',
        'guarantor_suburb',
        'guarantor_town_city',
        'guarantor_postcode',
        'guarantor_country',
        'guarantor_dob',
        'guarantor_passport_number',
        'guarantor_notes',
        'guarantor_bank_name',
        'guarantor_bank_sort_code',
        'guarantor_bank_account_number',
        'guarantor_bank_account_name',
        'guarantor_date_created',
        'guarantor_date_updated',
        'guarantor_created_by',
        'guarantor_updated_by',
        'guarantor_online_login_username',
        'guarantor_online_login_password',
        'guarantor_nino',
        'guarantor_employment_status',
        'guarantor_employer_name',
        'guarantor_driving_licence_number',
        'guarantor_income',
        'guarantor_income_frequency',
        'guarantor_income_notes',
        'guarantor_online_account',
        'guarantor_referencing_provider',
        'guarantor_referencing_provider_reference',
        'guarantor_branch',
    ];

    protected $casts = [
        'guarantor_title' => 'integer',
        'guarantor_country' => 'integer',
        'guarantor_dob' => 'date',
        'guarantor_bank_name' => 'integer',
        'guarantor_date_created' => 'datetime',
        'guarantor_date_updated' => 'datetime',
        'guarantor_created_by' => 'integer',
        'guarantor_updated_by' => 'integer',
        'guarantor_employment_status' => 'integer',
        'guarantor_income' => 'decimal:2',
        'guarantor_income_frequency' => 'integer',
        'guarantor_online_account' => 'integer',
        'guarantor_referencing_provider' => 'integer',
        'guarantor_branch' => 'integer',
    ];

        protected $dates = [
        'guarantor_dob',
        'guarantor_date_created',
        'guarantor_date_updated',
    ];

    /**
     * Get the title of the guarantor.
     */

    /**
     * Get the country of the guarantor.
     */

    /**
     * Get the employee who created the guarantor.
     */

    /**
     * Get the employee who updated the guarantor.
     */

    /**
     * Get the tenancy relationships for the guarantor.
     */

    /**
     * Get the income records for the guarantor.
     */

    /**
     * Get the Bank associated with this record.
     */
    public function name(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'guarantor_bank_name', 'bank_id');
    }

    /**
     * Get the Branch associated with this record.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'guarantor_branch', 'branch_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'guarantor_created_by', 'employee_id');
    }

    /**
     * Get the Title associated with this record.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'guarantor_title', 'title_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'guarantor_updated_by', 'employee_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'guarantor_country', 'country_id');
    }

    /**
     * Get the EmploymentStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(EmploymentStatus::class, 'guarantor_employment_status', 'employment_status_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function provider(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'guarantor_referencing_provider', 'directory_id');
    }
}