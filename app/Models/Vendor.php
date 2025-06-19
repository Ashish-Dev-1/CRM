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
        'vendor_token',
        'vendor_type',
        'vendor_title',
        'vendor_first_name',
        'vendor_surname',
        // ...other fields...
    ];

    protected $dates = [
        'vendor_date_created',
        'vendor_date_updated',
        'vendor_dob',
    ];

    /**
     * Get the branch that the vendor belongs to.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'vendor_branch', 'branch_id');
    }

    /**
     * Get the title of the vendor.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'vendor_title', 'title_id');
    }

    /**
     * Get the country of the vendor.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'vendor_country', 'country_id');
    }

    /**
     * Get the registered office country of the vendor.
     */
    public function companyRegOfficeCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'vendor_company_reg_office_country', 'country_id');
    }

    /**
     * Get the bank of the vendor.
     */
    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'vendor_bank_name', 'bank_id');
    }

    /**
     * Get the type of the vendor.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(BodyType::class, 'vendor_type', 'body_type_id');
    }

    /**
     * Get the status of the vendor.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(VendorStatus::class, 'vendor_status', 'vendor_status_id');
    }

    /**
     * Get the sole sale fee type.
     */
    public function soleSaleFeeType(): BelongsTo
    {
        return $this->belongsTo(FeeType::class, 'vendor_sole_sale_fee_type', 'fee_type_id');
    }

    /**
     * Get the multi sale fee type.
     */
    public function multiSaleFeeType(): BelongsTo
    {
        return $this->belongsTo(FeeType::class, 'vendor_multi_sale_fee_type', 'fee_type_id');
    }

    /**
     * Get the solicitor company of the vendor.
     */
    public function solicitorCompany(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'vendor_solicitor_company', 'directory_id');
    }

    /**
     * Get the solicitor individual of the vendor.
     */
    public function solicitorIndividual(): BelongsTo
    {
        return $this->belongsTo(DirectoryIndividual::class, 'vendor_solicitor_company_individual', 'directory_individual_id');
    }

    /**
     * Get the capacity of the vendor.
     */
    public function capacity(): BelongsTo
    {
        return $this->belongsTo(Capacity::class, 'vendor_capacity', 'capacity_id');
    }

    /**
     * Get the employee who created the vendor.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'vendor_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the vendor.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'vendor_updated_by', 'employee_id');
    }

    /**
     * Get the properties for the vendor.
     */
    public function properties(): HasMany
    {
        return $this->hasMany(PropertyVendor::class, 'property_vendor_vendor', 'vendor_id');
    }
}