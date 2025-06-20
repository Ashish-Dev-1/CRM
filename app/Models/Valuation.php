<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Valuation extends Model
{
    //

    /**
     * Get the Branch associated with this record.
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'valuation_branch', 'branch_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_created_by', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_employee', 'employee_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'valuation_home_address_property_country', 'country_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function 2(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'valuation_home_address_property_country_2', 'country_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function 3(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'valuation_home_address_property_country_3', 'country_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function 4(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'valuation_home_address_property_country_4', 'country_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function lister(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_lister', 'employee_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function negotiator(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_negotiator', 'employee_id');
    }

    /**
     * Get the PropertyCategory associated with this record.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(PropertyCategory::class, 'valuation_property_category', 'property_category_id');
    }

    /**
     * Get the Country associated with this record.
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'valuation_property_country', 'country_id');
    }

    /**
     * Get the PropertyType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class, 'valuation_property_type', 'property_type_id');
    }

    /**
     * Get the Title associated with this record.
     */
    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'valuation_title', 'title_id');
    }

    /**
     * Get the Title associated with this record.
     */
    public function 2(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'valuation_title_2', 'title_id');
    }

    /**
     * Get the Title associated with this record.
     */
    public function 3(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'valuation_title_3', 'title_id');
    }

    /**
     * Get the Title associated with this record.
     */
    public function 4(): BelongsTo
    {
        return $this->belongsTo(Title::class, 'valuation_title_4', 'title_id');
    }

    /**
     * Get the Landlord associated with this record.
     */
    public function landlord(): BelongsTo
    {
        return $this->belongsTo(Landlord::class, 'valuation_to_landlord', 'landlord_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'valuation_to_property', 'property_id');
    }

    /**
     * Get the Vendor associated with this record.
     */
    public function vendor(): BelongsTo
    {
        return $this->belongsTo(Vendor::class, 'valuation_to_vendor', 'vendor_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'valuation_updated_by', 'employee_id');
    }

    /**
     * Get the Capacity associated with this record.
     */
    public function capacity(): BelongsTo
    {
        return $this->belongsTo(Capacity::class, 'valuation_capacity', 'capacity_id');
    }

    /**
     * Get the Capacity associated with this record.
     */
    public function 2(): BelongsTo
    {
        return $this->belongsTo(Capacity::class, 'valuation_capacity_2', 'capacity_id');
    }

    /**
     * Get the Capacity associated with this record.
     */
    public function 3(): BelongsTo
    {
        return $this->belongsTo(Capacity::class, 'valuation_capacity_3', 'capacity_id');
    }

    /**
     * Get the Capacity associated with this record.
     */
    public function 4(): BelongsTo
    {
        return $this->belongsTo(Capacity::class, 'valuation_capacity_4', 'capacity_id');
    }

    /**
     * Get the ValuationAvailability associated with this record.
     */
    public function availability(): BelongsTo
    {
        return $this->belongsTo(ValuationAvailability::class, 'valuation_property_availability', 'valuation_availability_id');
    }

    /**
     * Get the PropertyPriceQualifier associated with this record.
     */
    public function qualifier(): BelongsTo
    {
        return $this->belongsTo(PropertyPriceQualifier::class, 'valuation_price_qualifier', 'price_qualifier_id');
    }

    /**
     * Get the ValuationStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(ValuationStatus::class, 'valuation_status', 'valuation_status_id');
    }

    /**
     * Get the ValuationLostReason associated with this record.
     */
    public function reason(): BelongsTo
    {
        return $this->belongsTo(ValuationLostReason::class, 'valuation_lost_reason', 'valuation_lost_reason_id');
    }

    /**
     * Get the ValuationLeadSource associated with this record.
     */
    public function source(): BelongsTo
    {
        return $this->belongsTo(ValuationLeadSource::class, 'valuation_lead_source', 'valuation_lead_source_id');
    }

    /**
     * Get the PropertyPossessionStatus associated with this record.
     */
    public function occupancy(): BelongsTo
    {
        return $this->belongsTo(PropertyPossessionStatus::class, 'valuation_occupancy', 'property_possession_status_id');
    }

    /**
     * Get the ValuationReason associated with this record.
     */
    public function reason(): BelongsTo
    {
        return $this->belongsTo(ValuationReason::class, 'valuation_reason', 'valuation_reason_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function to(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'valuation_lost_to', 'directory_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function agent(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'valuation_multi_agent', 'directory_id');
    }

    /**
     * Get the Directory associated with this record.
     */
    public function photographer(): BelongsTo
    {
        return $this->belongsTo(Directory::class, 'valuation_photographer', 'directory_id');
    }

    /**
     * Get the FeeType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(FeeType::class, 'valuation_lost_sale_fee_type', 'fee_type_id');
    }

    /**
     * Get the FeeType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(FeeType::class, 'valuation_sale_fee_type', 'fee_type_id');
    }

    /**
     * Get the FeeType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(FeeType::class, 'valuation_tenant_find_fee_type', 'fee_type_id');
    }

    /**
     * Get the FeeType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(FeeType::class, 'valuation_tenant_find_with_management_fee_type', 'fee_type_id');
    }

    /**
     * Get the FeeType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(FeeType::class, 'valuation_management_fee_type', 'fee_type_id');
    }

    /**
     * Get the PropertyTenureType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(PropertyTenureType::class, 'valuation_tenure_type', 'property_tenure_type_id');
    }

    /**
     * Get the ValuationCondition associated with this record.
     */
    public function condition(): BelongsTo
    {
        return $this->belongsTo(ValuationCondition::class, 'valuation_condition', 'valuation_condition_id');
    }

    /**
     * Get the ContractType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(ContractType::class, 'valuation_contract_type', 'contract_type_id');
    }

    /**
     * Get the PropertyAccessArrangement associated with this record.
     */
    public function access(): BelongsTo
    {
        return $this->belongsTo(PropertyAccessArrangement::class, 'valuation_photographer_access', 'property_access_arrangement_id');
    }

    /**
     * Get the LettingService associated with this record.
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(LettingService::class, 'valuation_letting_service', 'letting_service_id');
    }

    /**
     * Get the PropertyAreaUnit associated with this record.
     */
    public function unit(): BelongsTo
    {
        return $this->belongsTo(PropertyAreaUnit::class, 'valuation_property_living_space_unit', 'property_area_unit_id');
    }
}
