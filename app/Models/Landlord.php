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
        'landlord_token',
        'landlord_type',
        'landlord_title',
        'landlord_first_name',
        'landlord_surname',
        // ...other fields...
    ];

    protected $dates = [
        'landlord_date_created',
        'landlord_date_updated',
        'landlord_dob',
        'landlord_nrl_date',
    ];

    /**
     * Get the branch that the landlord belongs to.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'landlord_branch', 'branch_id');
    }

    /**
     * Get the title of the landlord.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'landlord_title', 'title_id');
    }

    /**
     * Get the country of the landlord.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'landlord_country', 'country_id');
    }

    /**
     * Get the registered office country of the landlord.
     */
    public function companyRegOfficeCountry(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'landlord_company_reg_office_country', 'country_id');
    }

    /**
     * Get the bank of the landlord.
     */
    public function bank(): BelongsTo
    {
        return $this->belongsTo(Bank::class, 'landlord_bank_name', 'bank_id');
    }

    /**
     * Get the type of the landlord.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(BodyType::class, 'landlord_type', 'body_type_id');
    }

    /**
     * Get the NRL status of the landlord.
     */
    public function nrlStatus(): BelongsTo
    {
        return $this->belongsTo(LandlordNrlStatus::class, 'landlord_nrl_status', 'landlord_nrl_status_id');
    }

    /**
     * Get the status of the landlord.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(LandlordStatus::class, 'landlord_status', 'landlord_status_id');
    }

    /**
     * Get the capacity of the landlord.
     */
    public function capacity(): BelongsTo
    {
        return $this->belongsTo(Capacity::class, 'landlord_capacity', 'capacity_id');
    }

    /**
     * Get the discount group of the landlord.
     */
    public function discountGroup(): BelongsTo
    {
        return $this->belongsTo(DiscountGroup::class, 'landlord_discount_group', 'discount_group_id');
    }

    /**
     * Get the employee who created the landlord.
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'landlord_created_by', 'employee_id');
    }

    /**
     * Get the employee who updated the landlord.
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'landlord_updated_by', 'employee_id');
    }

    /**
     * Get the properties for the landlord.
     */
    public function properties(): HasMany
    {
        return $this->hasMany(PropertyLandlord::class, 'property_landlord_landlord', 'landlord_id');
    }
}