<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentLegalExpensesInsurance extends Model
{
    //

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'rlei_created_by', 'employee_id');
    }

    /**
     * Get the Property associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Property::class, 'rlei_property_id', 'property_id');
    }

    /**
     * Get the Tenancy associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(Tenancy::class, 'rlei_tenancy_id', 'tenancy_id');
    }

    /**
     * Get the Employee associated with this record.
     */
    public function by(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'rlei_updated_by', 'employee_id');
    }

    /**
     * Get the PropertyRoomLetting associated with this record.
     */
    public function id(): BelongsTo
    {
        return $this->belongsTo(PropertyRoomLetting::class, 'rlei_room_id', 'property_room_letting_id');
    }

    /**
     * Get the TenancyFixedTermUnit associated with this record.
     */
    public function unit(): BelongsTo
    {
        return $this->belongsTo(TenancyFixedTermUnit::class, 'rlei_term_unit', 'tenancy_fixed_term_unit_id');
    }

    /**
     * Get the RentLegalExpensesInsuranceStatus associated with this record.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(RentLegalExpensesInsuranceStatus::class, 'rlei_status', 'rleis_id');
    }

    /**
     * Get the RentLegalExpensesInsuranceType associated with this record.
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(RentLegalExpensesInsuranceType::class, 'rlei_policy_type', 'rleit_id');
    }
}
