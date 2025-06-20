<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tenancy extends Model
{
    protected $table = 'tenancy';
    protected $primaryKey = 'integer';
    public $timestamps = false;

        protected $fillable = [
        'tenancy_token',
        'tenancy_type',
        'tenancy_property',
        'tenancy_furnished',
        'tenancy_children',
        'tenancy_pets',
        'tenancy_smoking',
        'tenancy_property_part',
        'tenancy_property_part_room',
        'tenancy_property_part_description',
        'tenancy_shared_facilities',
        'tenancy_shared_facilities_description',
        'tenancy_agreement_date',
        'tenancy_start_date',
        'tenancy_fixed_term',
        'tenancy_fixed_term_unit',
        'tenancy_fixed_term_end_date',
        'tenancy_rent_amount',
        'tenancy_rent_frequency',
        'tenancy_rent_payable',
        'tenancy_rent_agreement',
        'tenancy_rent_frequency_schedule',
        'tenancy_rent_payment_method',
        'tenancy_council_pay_rent',
        'tenancy_rent_vat_rate',
        'tenancy_service_charge_amount',
        'tenancy_service_charge_frequency',
        'tenancy_service_charge_payable',
        'tenancy_service_charge_agreement',
        'tenancy_service_charge_frequency_schedule',
        'tenancy_service_charge_payment_method',
        'tenancy_service_charge_vat_rate',
        'tenancy_insurance_amount',
        'tenancy_insurance_frequency',
        'tenancy_insurance_payable',
        'tenancy_insurance_agreement',
        'tenancy_insurance_frequency_schedule',
        'tenancy_insurance_payment_method',
        'tenancy_insurance_vat_rate',
        'tenancy_notes',
        'tenancy_agent_branch',
        'tenancy_agent_employee',
        'tenancy_letting_service',
        'tenancy_tenant_find_fee',
        'tenancy_tenant_find_fee_type',
        'tenancy_management_fee',
        'tenancy_management_fee_type',
        'tenancy_gas',
        'tenancy_electricity',
        'tenancy_water',
        'tenancy_oil',
        'tenancy_telephone',
        'tenancy_broadband',
        'tenancy_tv_licence',
        'tenancy_sat_cable_tv',
        'tenancy_council_tax',
        'tenancy_deposit_required',
        'tenancy_deposit_amount',
        'tenancy_status',
        'tenancy_renewal_status',
        'tenancy_renewal_notes',
        'tenancy_renewal_employee',
        'tenancy_is_renewal_id',
        'tenancy_is_renewal',
        'tenancy_tnts_vacation_date',
        'tenancy_official_end_date',
        'tenancy_move_out_reason',
        'tenancy_move_out_notes',
        'tenancy_tenant_find_with_management_fee',
        'tenancy_tenant_find_with_management_fee_type',
        'tenancy_overdue_tc_reminders',
        'tenancy_student',
        'tenancy_inspection_frequency',
        'tenancy_last_inspection_date',
        'tenancy_last_inspection_date_backup',
        'tenancy_move_out_employee',
        'tenancy_inventory_ingoing_link',
        'tenancy_inventory_outgoing_link',
        'tenancy_notice_expiry_date',
        'tenancy_accounts_next_review_date',
        'tenancy_viewings_permitted',
        'tenancy_date_created',
        'tenancy_date_updated',
        'tenancy_created_by',
        'tenancy_updated_by',
        'tenancy_management_takeover',
        'tenancy_management_takeover_date',
        'tenancy_management_takeover_notes',
        'tenancy_periodic_rent_increase_negotiator',
        'tenancy_rlei_opt_out_date',
    ];

    protected $casts = [
        'tenancy_type' => 'integer',
        'tenancy_property' => 'integer',
        'tenancy_furnished' => 'integer',
        'tenancy_children' => 'integer',
        'tenancy_pets' => 'integer',
        'tenancy_smoking' => 'integer',
        'tenancy_property_part' => 'integer',
        'tenancy_property_part_room' => 'integer',
        'tenancy_shared_facilities' => 'integer',
        'tenancy_agreement_date' => 'date',
        'tenancy_start_date' => 'date',
        'tenancy_fixed_term' => 'integer',
        'tenancy_fixed_term_unit' => 'integer',
        'tenancy_fixed_term_end_date' => 'date',
        'tenancy_rent_amount' => 'decimal:2',
        'tenancy_rent_frequency' => 'integer',
        'tenancy_rent_payable' => 'integer',
        'tenancy_rent_agreement' => 'integer',
        'tenancy_rent_payment_method' => 'integer',
        'tenancy_council_pay_rent' => 'integer',
        'tenancy_rent_vat_rate' => 'integer',
        'tenancy_service_charge_amount' => 'decimal:2',
        'tenancy_service_charge_frequency' => 'integer',
        'tenancy_service_charge_payable' => 'integer',
        'tenancy_service_charge_agreement' => 'integer',
        'tenancy_service_charge_payment_method' => 'integer',
        'tenancy_service_charge_vat_rate' => 'integer',
        'tenancy_insurance_amount' => 'decimal:2',
        'tenancy_insurance_frequency' => 'integer',
        'tenancy_insurance_payable' => 'integer',
        'tenancy_insurance_agreement' => 'integer',
        'tenancy_insurance_payment_method' => 'integer',
        'tenancy_insurance_vat_rate' => 'integer',
        'tenancy_agent_branch' => 'integer',
        'tenancy_agent_employee' => 'integer',
        'tenancy_letting_service' => 'integer',
        'tenancy_tenant_find_fee' => 'decimal:2',
        'tenancy_tenant_find_fee_type' => 'integer',
        'tenancy_management_fee' => 'decimal:2',
        'tenancy_management_fee_type' => 'integer',
        'tenancy_gas' => 'integer',
        'tenancy_electricity' => 'integer',
        'tenancy_water' => 'integer',
        'tenancy_oil' => 'integer',
        'tenancy_telephone' => 'integer',
        'tenancy_broadband' => 'integer',
        'tenancy_tv_licence' => 'integer',
        'tenancy_sat_cable_tv' => 'integer',
        'tenancy_council_tax' => 'integer',
        'tenancy_deposit_required' => 'integer',
        'tenancy_deposit_amount' => 'decimal:2',
        'tenancy_status' => 'integer',
        'tenancy_renewal_status' => 'integer',
        'tenancy_renewal_employee' => 'integer',
        'tenancy_is_renewal_id' => 'integer',
        'tenancy_is_renewal' => 'integer',
        'tenancy_tnts_vacation_date' => 'date',
        'tenancy_official_end_date' => 'date',
        'tenancy_move_out_reason' => 'integer',
        'tenancy_tenant_find_with_management_fee' => 'decimal:2',
        'tenancy_tenant_find_with_management_fee_type' => 'integer',
        'tenancy_overdue_tc_reminders' => 'integer',
        'tenancy_student' => 'integer',
        'tenancy_inspection_frequency' => 'integer',
        'tenancy_last_inspection_date' => 'date',
        'tenancy_last_inspection_date_backup' => 'date',
        'tenancy_move_out_employee' => 'integer',
        'tenancy_notice_expiry_date' => 'date',
        'tenancy_accounts_next_review_date' => 'date',
        'tenancy_viewings_permitted' => 'integer',
        'tenancy_date_created' => 'datetime',
        'tenancy_date_updated' => 'datetime',
        'tenancy_created_by' => 'integer',
        'tenancy_updated_by' => 'integer',
        'tenancy_management_takeover' => 'integer',
        'tenancy_management_takeover_date' => 'date',
        'tenancy_periodic_rent_increase_negotiator' => 'integer',
        'tenancy_rlei_opt_out_date' => 'date',
    ];

    protected $dates = [
        'tenancy_agreement_date',
        'tenancy_start_date',
        'tenancy_fixed_term_end_date',
        'tenancy_tnts_vacation_date',
        'tenancy_official_end_date',
        'tenancy_last_inspection_date',
        'tenancy_last_inspection_date_backup',
        'tenancy_notice_expiry_date',
        'tenancy_accounts_next_review_date',
        'tenancy_date_created',
        'tenancy_date_updated',
        'tenancy_management_takeover_date',
        'tenancy_rlei_opt_out_date',
    ];

    /**
     * Get the property of the tenancy.
     */
    

    /**
     * Get the branch of the tenancy.
     */
    

    /**
     * Get the status of the tenancy.
     */
    

    /**
     * Get the rent frequency of the tenancy.
     */
    

    /**
     * Get the rent payable of the tenancy.
     */
    

    /**
     * Get the service charge frequency of the tenancy.
     */
    

    /**
     * Get the insurance frequency of the tenancy.
     */
    

    /**
     * Get the service charge payable of the tenancy.
     */
    

    /**
     * Get the insurance payable of the tenancy.
     */
    

    /**
     * Get the service charge agreement of the tenancy.
     */
    

    /**
     * Get the insurance agreement of the tenancy.
     */
    

    /**
     * Get the service charge payment method of the tenancy.
     */
    

    /**
     * Get the insurance payment method of the tenancy.
     */
    

    /**
     * Get the management fee type of the tenancy.
     */
    

    /**
     * Get the tenant find with management fee type of the tenancy.
     */
    

    /**
     * Get the rent increase negotiator of the tenancy.
     */
    

    /**
     * Get the tenants of the tenancy.
     */
    

    /**
     * Get the guarantors of the tenancy.
     */
    

    /**
     * Get the allowed occupants of the tenancy.
     */
    

    /**
     * Get the deposit contributors of the tenancy.
     */
    

    /**
     * Get the additional clauses of the tenancy.
     */
    

    /**
     * Get the rent log of the tenancy.
     */
    

    /**
     * Get the updates for the tenancy.
     */
    

    /**
     * Get the Branch associated with this record.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'tenancy_agent_branch', 'branch_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_agent_employee', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function negotiator(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_periodic_rent_increase_negotiator', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_created_by', 'employee_id');
    }

    /**
     * Get the AccountsVatRate associated with this record.
     */
    public function rate(): BelongsTo
    {
        return $this->belongsTo(AccountsVatRate::class, 'tenancy_insurance_vat_rate', 'vat_rate_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_move_out_employee', 'employee_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'tenancy_property', 'property_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_renewal_employee', 'employee_id');
    }

    /**
     * Get the AccountsVatRate associated with this record.
     */
    public function rate(): BelongsTo
    {
        return $this->belongsTo(AccountsVatRate::class, 'tenancy_rent_vat_rate', 'vat_rate_id');
    }

    /**
     * Get the AccountsVatRate associated with this record.
     */
    public function rate(): BelongsTo
    {
        return $this->belongsTo(AccountsVatRate::class, 'tenancy_service_charge_vat_rate', 'vat_rate_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'tenancy_updated_by', 'employee_id');
    }

    /**
     * Get the PropertyCategory associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(PropertyCategory::class, 'tenancy_type', 'property_category_id');
    }

    /**
     * Get the PropertyRoomLetting associated with this record.
     */
    public function room(): BelongsTo
    {
        return $this->belongsTo(PropertyRoomLetting::class, 'tenancy_property_part_room', 'property_room_letting_id');
    }

    /**
     * Get the TenancyFixedTermUnit associated with this record.
     */
    public function unit(): BelongsTo
    {
        return $this->belongsTo(TenancyFixedTermUnit::class, 'tenancy_fixed_term_unit', 'tenancy_fixed_term_unit_id');
    }

    /**
     * Get the TenancyRentFrequency associated with this record.
     */
    public function frequency(): BelongsTo
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'tenancy_rent_frequency', 'tenancy_rent_frequency_id');
    }

    /**
     * Get the TenancyRentFrequency associated with this record.
     */
    public function payable(): BelongsTo
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'tenancy_rent_payable', 'tenancy_rent_frequency_id');
    }

    /**
     * Get the TenancyRentFrequency associated with this record.
     */
    public function frequency(): BelongsTo
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'tenancy_service_charge_frequency', 'tenancy_rent_frequency_id');
    }

    /**
     * Get the TenancyRentFrequency associated with this record.
     */
    public function frequency(): BelongsTo
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'tenancy_insurance_frequency', 'tenancy_rent_frequency_id');
    }

    /**
     * Get the TenancyRentFrequency associated with this record.
     */
    public function payable(): BelongsTo
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'tenancy_service_charge_payable', 'tenancy_rent_frequency_id');
    }

    /**
     * Get the TenancyRentFrequency associated with this record.
     */
    public function payable(): BelongsTo
    {
        return $this->belongsTo(TenancyRentFrequency::class, 'tenancy_insurance_payable', 'tenancy_rent_frequency_id');
    }

    /**
     * Get the TenancyRentAgreement associated with this record.
     */
    public function agreement(): BelongsTo
    {
        return $this->belongsTo(TenancyRentAgreement::class, 'tenancy_rent_agreement', 'tenancy_rent_agreement_id');
    }

    /**
     * Get the TenancyRentAgreement associated with this record.
     */
    public function agreement(): BelongsTo
    {
        return $this->belongsTo(TenancyRentAgreement::class, 'tenancy_service_charge_agreement', 'tenancy_rent_agreement_id');
    }

    /**
     * Get the TenancyRentAgreement associated with this record.
     */
    public function agreement(): BelongsTo
    {
        return $this->belongsTo(TenancyRentAgreement::class, 'tenancy_insurance_agreement', 'tenancy_rent_agreement_id');
    }

    /**
     * Get the TenancyPaymentMethod associated with this record.
     */
    public function method(): BelongsTo
    {
        return $this->belongsTo(TenancyPaymentMethod::class, 'tenancy_rent_payment_method', 'tenancy_payment_method_id');
    }

    /**
     * Get the TenancyPaymentMethod associated with this record.
     */
    public function method(): BelongsTo
    {
        return $this->belongsTo(TenancyPaymentMethod::class, 'tenancy_service_charge_payment_method', 'tenancy_payment_method_id');
    }

    /**
     * Get the TenancyPaymentMethod associated with this record.
     */
    public function method(): BelongsTo
    {
        return $this->belongsTo(TenancyPaymentMethod::class, 'tenancy_insurance_payment_method', 'tenancy_payment_method_id');
    }

    /**
     * Get the LettingService associated with this record.
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(LettingService::class, 'tenancy_letting_service', 'letting_service_id');
    }

    /**
     * Get the FeeType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(FeeType::class, 'tenancy_tenant_find_fee_type', 'fee_type_id');
    }

    /**
     * Get the FeeType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(FeeType::class, 'tenancy_management_fee_type', 'fee_type_id');
    }

    /**
     * Get the FeeType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(FeeType::class, 'tenancy_tenant_find_with_management_fee_type', 'fee_type_id');
    }

    /**
     * Get the TenancyStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(TenancyStatus::class, 'tenancy_status', 'tenancy_status_id');
    }

    /**
     * Get the TenancyRenewalStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(TenancyRenewalStatus::class, 'tenancy_renewal_status', 'tenancy_renewal_status_id');
    }

    /**
     * Get the Tenancy associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'tenancy_id', 'tenancy_id');
    }

    /**
     * Get the TenancyMoveOutReason associated with this record.
     */
    public function reason(): BelongsTo
    {
        return $this->belongsTo(TenancyMoveOutReason::class, 'tenancy_move_out_reason', 'tenancy_move_out_reason_id');
    }

    /**
     * Get the TenancyInspectionFrequency associated with this record.
     */
    public function frequency(): BelongsTo
    {
        return $this->belongsTo(TenancyInspectionFrequency::class, 'tenancy_inspection_frequency', 'tenancy_inspection_frequency_id');
    }

    /**
     * Get the TenancyPropertyPart associated with this record.
     */
    public function part(): BelongsTo
    {
        return $this->belongsTo(TenancyPropertyPart::class, 'tenancy_property_part', 'tenancy_property_part_id');
    }
}