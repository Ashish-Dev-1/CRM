<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tenancy extends Model
{
    protected $table = 'tenancy';
    protected $primaryKey = 'tenancy_id';
    public $timestamps = false;

    protected $fillable = [
        // Add your fillable fields here
    ];

    /**
     * Get the property of the tenancy.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'tenancy_property', 'property_id');
    }

    /**
     * Get the branch of the tenancy.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'tenancy_branch', 'branch_id');
    }

    /**
     * Get the status of the tenancy.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(TenancyStatus::class, 'tenancy_status', 'tenancy_status_id');
    }

    /**
     * Get the rent frequency of the tenancy.
     */
    public function rentFrequency(): BelongsTo
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'tenancy_rent_frequency', 'tenancy_rent_frequency_id');
    }

    /**
     * Get the rent payable of the tenancy.
     */
    public function rentPayable(): BelongsTo
    {
        return $this->belongsTo(TenancyRentAgreement::class, 'tenancy_rent_payable', 'tenancy_rent_agreement_id');
    }

    /**
     * Get the service charge frequency of the tenancy.
     */
    public function serviceChargeFrequency(): BelongsTo
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'tenancy_service_charge_frequency', 'tenancy_rent_frequency_id');
    }

    /**
     * Get the insurance frequency of the tenancy.
     */
    public function insuranceFrequency(): BelongsTo
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'tenancy_insurance_frequency', 'tenancy_rent_frequency_id');
    }

    /**
     * Get the service charge payable of the tenancy.
     */
    public function serviceChargePayable(): BelongsTo
    {
        return $this->belongsTo(TenancyRentAgreement::class, 'tenancy_service_charge_payable', 'tenancy_rent_agreement_id');
    }

    /**
     * Get the insurance payable of the tenancy.
     */
    public function insurancePayable(): BelongsTo
    {
        return $this->belongsTo(TenancyRentAgreement::class, 'tenancy_insurance_payable', 'tenancy_rent_agreement_id');
    }

    /**
     * Get the service charge agreement of the tenancy.
     */
    public function serviceChargeAgreement(): BelongsTo
    {
        return $this->belongsTo(TenancyPaymentMethod::class, 'tenancy_service_charge_agreement', 'tenancy_payment_method_id');
    }

    /**
     * Get the insurance agreement of the tenancy.
     */
    public function insuranceAgreement(): BelongsTo
    {
        return $this->belongsTo(TenancyPaymentMethod::class, 'tenancy_insurance_agreement', 'tenancy_payment_method_id');
    }

    /**
     * Get the service charge payment method of the tenancy.
     */
    public function serviceChargePaymentMethod(): BelongsTo
    {
        return $this->belongsTo(TenancyPaymentMethod::class, 'tenancy_service_charge_payment_method', 'tenancy_payment_method_id');
    }

    /**
     * Get the insurance payment method of the tenancy.
     */
    public function insurancePaymentMethod(): BelongsTo
    {
        return $this->belongsTo(TenancyPaymentMethod::class, 'tenancy_insurance_payment_method', 'tenancy_payment_method_id');
    }

    /**
     * Get the management fee type of the tenancy.
     */
    public function managementFeeType(): BelongsTo
    {
        return $this->belongsTo(FeeType::class, 'tenancy_management_fee_type', 'fee_type_id');
    }

    /**
     * Get the tenant find with management fee type of the tenancy.
     */
    public function tenantFindWithManagementFeeType(): BelongsTo
    {
        return $this->belongsTo(FeeType::class, 'tenancy_tenant_find_with_management_fee_type', 'fee_type_id');
    }

    /**
     * Get the rent increase negotiator of the tenancy.
     */
    public function rentIncreaseNegotiator(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_periodic_rent_increase_negotiator', 'employee_id');
    }

    /**
     * Get the tenants of the tenancy.
     */
    public function tenants(): HasMany
    {
        return $this->hasMany(TenancyTenants::class, 'tenancy_tenants_tenancy', 'tenancy_id');
    }

    /**
     * Get the guarantors of the tenancy.
     */
    public function guarantors(): HasMany
    {
        return $this->hasMany(TenancyGuarantors::class, 'tenancy_guarantors_tenancy', 'tenancy_id');
    }

    /**
     * Get the allowed occupants of the tenancy.
     */
    public function allowedOccupants(): HasMany
    {
        return $this->hasMany(TenancyAllowedOccupant::class, 'tenancy_allowed_occupant_tenancy', 'tenancy_id');
    }

    /**
     * Get the deposit contributors of the tenancy.
     */
    public function depositContributors(): HasMany
    {
        return $this->hasMany(TenancyDepositContributor::class, 'tenancy_deposit_contributor_tenancy', 'tenancy_id');
    }

    /**
     * Get the additional clauses of the tenancy.
     */
    public function additionalClauses(): HasMany
    {
        return $this->hasMany(TenancyAdditionalClauses::class, 'tenancy_additional_clauses_tenancy', 'tenancy_id');
    }

    /**
     * Get the rent log of the tenancy.
     */
    public function rentLog(): HasMany
    {
        return $this->hasMany(TenancyLogRent::class, 'tenancy_log_rent_tenancy', 'tenancy_id');
    }

    /**
     * Get the updates for the tenancy.
     */
    public function updates(): HasMany
    {
        return $this->hasMany(TenancyUpdates::class, 'tenancy_updates_tenancy', 'tenancy_id');
    }
}